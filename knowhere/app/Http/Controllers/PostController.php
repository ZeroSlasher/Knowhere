<?php

namespace App\Http\Controllers;

use App\Images;
use App\Review;
use App\OutletProf;
use App\Reg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function Addposting()
    {
        $cat = DB::table('tbl_cat')->get();
        $state = DB::table('tbl_state')->get();
        return view('add-posting', compact('state', 'cat'));
    }

    public function addpost(Request $request)
    {
        $all = $request->all();
        $service = implode(",", $request->get('service'));
        $id = Session::get('uid');
        $oreg = Reg::select('regid')->where('id', $id)->get();
        foreach ($oreg as $o) {
            $oregid = $o->regid;
        }
        if (Session::get('utype') == 2) {
            $status = 5;
        } elseif (Session::get('utype') == 3) {
            $status = 6;
        }
        $post = new OutletProf([

            'id' => Session::get('uid'),
            'regid' => $oregid,
            'outletname' => $all['oname'],
            'ownername' => $all['owname'],
            'address' => $all['Address'],
            'description' => $all['Description'],
            'city_id' => $all['city'],
            'subcat_id' => $all['subcat'],
            'website' => $all['wsite'],
            'Service_id' => $service,
            'phone1' => $all['phone1'],
            'phone2' => $all['phone2'],
            'status_id' => $status,

        ]);
        $post->save();

        $outletid = DB::getPdo()->lastInsertId();
        $img = new Images([
            'imgname' => 'Placeholder.jpg',
            'outletid' => $outletid,
        ]);
        $img->save();
        return redirect('/mypostings')->with('success', 'Posting added');
    }

    public function deletepost($id)
    {
        $del = DB::select("select * from tbl_outlet_prof as p,tbl_users_reg as u where p.outletid = '$id' and p.regid = u.regid");
        return view('delete-post', compact('del'));
    }

    public function removepost(Request $request)
    {
        $request->all();
        if ($request->get('Radio') == 2) {
            return redirect('/mypostings')->with('info', 'Post delete request declined');
        }
        if ($request->get('Radio') == 1) {
            DB::select("delete from tbl_outlet_prof where outletid = $request->get('id')");
            return redirect('/mypostings')->with('warning', 'Post deleted successfully');

        }
    }

    public function searchaction(Request $request)
    {
        $rqst = $request->all();
        $loc = $rqst['loc'];
        $cat = $rqst['cat'];

        // if (!array_key_exists('cat', $rqst)) {
        if (!$cat) {
            //     $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,`tbl_status` as st,
            //      `tbl_state` as sta, tbl_cat as cat,`tbl_district` as d,tbl_users_reg as o,tbl_login as lo WHERE
            //       l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and c.`dist_id`=d.`dist_id`
            //       and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lo.`id`=l.`id`
            // and s.cat_id = cat.cat_id and( c.city='$loc' or d.district='$loc')");
            $post = DB::table('tbl_outlet_prof')
                ->join('tbl_city', 'tbl_outlet_prof.city_id', '=', 'tbl_city.city_id')
                ->join('tbl_subcat', 'tbl_outlet_prof.subcat_id', '=', 'tbl_subcat.subcat_id')
                ->join('tbl_status', 'tbl_outlet_prof.status_id', '=', 'tbl_status.status_id')
                ->join('tbl_district', 'tbl_city.dist_id', '=', 'tbl_district.dist_id')
                ->join('tbl_state', 'tbl_district.state_id', '=', 'tbl_state.state_id')
                ->join('tbl_users_reg', 'tbl_outlet_prof.regid', '=', 'tbl_users_reg.regid')
                ->join('tbl_login', 'tbl_outlet_prof.id', '=', 'tbl_login.id')
                ->join('tbl_cat', 'tbl_subcat.cat_id', '=', 'tbl_cat.cat_id')
                ->orwhere('tbl_city.city', '=', $loc)
                ->orwhere('tbl_district.district', '=', $loc)->get();

            $data = DB::table('tbl_cat')->get();

            return view('listing_list', compact('post', 'data'));
        } else {

            // $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,`tbl_status` as st, `tbl_state` as sta, tbl_cat as cat,`tbl_district` as d,tbl_users_reg as o,tbl_login as lo WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lo.`id`=l.`id`
            // and s.cat_id = cat.cat_id and( c.city='$loc' or d.district='$loc') and cat.cat_id=$cat");
            $data = DB::table('tbl_cat')->get();
            $post = DB::table('tbl_outlet_prof')
                ->join('tbl_city', 'tbl_outlet_prof.city_id', '=', 'tbl_city.city_id')
                ->join('tbl_subcat', 'tbl_outlet_prof.subcat_id', '=', 'tbl_subcat.subcat_id')
                ->join('tbl_status', 'tbl_outlet_prof.status_id', '=', 'tbl_status.status_id')
                ->join('tbl_district', 'tbl_city.dist_id', '=', 'tbl_district.dist_id')
                ->join('tbl_state', 'tbl_district.state_id', '=', 'tbl_state.state_id')
                ->join('tbl_users_reg', 'tbl_outlet_prof.regid', '=', 'tbl_users_reg.regid')
                ->join('tbl_login', 'tbl_outlet_prof.id', '=', 'tbl_login.id')
                ->join('tbl_cat', 'tbl_subcat.cat_id', '=', 'tbl_cat.cat_id')
                ->where('tbl_cat.cat_id', '=', $cat)
                ->orwhere('tbl_city.city', '=', $loc)
                ->orwhere('tbl_district.district', '=', $loc)->get();
            return view('listing_list', compact('post', 'data'));
        }
    }

    public function postdetails($id)
    {

         $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, `tbl_district` as d,tbl_users_reg as o,tbl_login as lg,
           tbl_cat as cat WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and s.cat_id = cat.cat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lg.`id`=l.`id`
            and l.outletid=$id");

        return view('postdetails', compact('post'));
    }

    public function addreview(Request $request)
{
    if(Session::get('id')){
        $id = Session::get('uid');
        $email = Session::get('id');
        $outletid = $request->get('id');
        $dbname = DB::select("select name from tbl_users_reg where id = $id");
        foreach($dbname as $n){
            $name= $n->name;
        }
        $review = new Review([
            'email' => $email,
            'title' => $request->get('title'),
            'outlet_id' => $outletid,
            'name' => $name,
            'review' => $request->get('review'),
        ]);

        $review->save();
        return back();
    }
    else{
        $email = $request->get('email');
        $outletid = $request->get('id');
        $title = $request->get('title');
        $name = $request->get('name');
        $review = $request->get('review');
        $reviewdb = new Review([
            'email' => $email,
            'title' => $request->get('title'),
            'outlet_id' => $outletid,
            'name' => $name,
            'review' => $request->get('review'),
        ]);

        $reviewdb->save();
        return back()->with('success', 'Review posted');
    }
}    
}