<?php

namespace App\Http\Controllers;

use App\Images;
use App\OutletProf;
use App\Reg;
use App\Review;
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
            'otitle' => $all['title'],
            'outletname' => $all['oname'],
            'ownername' => $all['owname'],
            'address' => $all['Address'],
            'latitude' => $all['lat'],
            'longitude' => $all['lng'],
            'description' => $all['Description'],
            'city_id' => $all['city'],
            'subcat_id' => $all['subcat'],
            'website' => $all['wsite'],
            'Service_id' => $service,
            'oemail' => $all['oemail'],
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

            $post = DB::table('tbl_outlet_prof')
                ->join('tbl_city', 'tbl_outlet_prof.city_id', '=', 'tbl_city.city_id')
                ->join('tbl_subcat', 'tbl_outlet_prof.subcat_id', '=', 'tbl_subcat.subcat_id')
                ->join('tbl_status', 'tbl_outlet_prof.status_id', '=', 'tbl_status.status_id')
                ->join('tbl_district', 'tbl_city.dist_id', '=', 'tbl_district.dist_id')
                ->join('tbl_state', 'tbl_district.state_id', '=', 'tbl_state.state_id')
                ->join('tbl_users_reg', 'tbl_outlet_prof.regid', '=', 'tbl_users_reg.regid')
                ->join('tbl_login', 'tbl_outlet_prof.id', '=', 'tbl_login.id')
                ->join('tbl_cat', 'tbl_subcat.cat_id', '=', 'tbl_cat.cat_id')
                ->where('tbl_city.city', '=', $loc)
                ->orwhere('tbl_district.district', '=', $loc)->paginate(10);

            $tpost = count($post);

            if ($tpost == 0) {
                return view('listing_list', compact('tpost'))->with('error', 'No results found!!');
            } else {
                $data = DB::table('tbl_cat')->get();

                foreach ($post as $p) {
                    $ad = str_replace(',', ' ', $p->address);

                    $lat = $p->latitude;
                    $lng = $p->longitude;

                    $new[] = array($ad, $lat, $lng);
                }

                return view('listing_list', compact('post', 'data', 'new', 'tpost'));
            }
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
                ->where('tbl_city.city', '=', $loc)
                ->orwhere('tbl_district.district', '=', $loc)->paginate(10);

            $tpost = count($post);
            if ($tpost == 0) {
                return view('listing_list')->with('tpost', $tpost)->with('successMsg', 'No results found!!');
                // return view('listing_list', compact('tpost'))->with('error', 'No results found!!');
                //return view('listing_list')->with('tpost', $tpost)->with('error', 'No results found!!');

            } else {
                foreach ($post as $p) {
                    $ad = str_replace(',', ' ', $p->address);
                    $lat = $p->latitude;
                    $lng = $p->longitude;

                    $new[] = array($ad, $lat, $lng);
                }

                return view('listing_list', compact('post', 'data', 'new', 'tpost'));
            }
        }
    }

    public function postdetails($id)
    {
        $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, `tbl_district` as d,tbl_users_reg as o,tbl_login as lg,
           tbl_cat as cat WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and s.cat_id = cat.cat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lg.`id`=l.`id`
            and l.outletid=$id");

        $review = DB::table('tbl_review')->where('outlet_id', $id)->paginate(5);
        $tot_rating = 0;
        foreach ($review as $r) {
            $ra = $r->rating;
            $tot_rating = $tot_rating + $ra;
        }
        if (count($review) == 0) {
            $fin_rating = 'be the first one to rate!';
        } else {
            $avg_rating = $tot_rating / count($review);
            $fin_rating = number_format((float) $avg_rating, 1, '.', '');
        }

        foreach ($post as $p) {
            $s = $p->Service_id;
        }
        $ss = explode(',', $s);
        $i = 0;
        foreach ($ss as $sss) {
            $service[$i] = DB::table('tbl_services')->where('service_id', $sss)->select('service')->get()[0];
            $i++;
        }

        return view('postdetails', compact('post', 'review', 'service', 'fin_rating'));
    }

    public function addreview(Request $request)
    {

        $outletid = $request->get('id');
        $title = $request->get('title');
        $review = $request->get('review');
        $rating = $request->get('rating');
        if (Session::get('id')) {

            $rules = $request->validate([
                'title' => 'required|min:6',
                'review' => 'required||min:6',
                'rating' => 'required',
                'captcha' => 'required|captcha',
            ]);
            $validator = validator()->make(request()->all(), $rules);
            if ($validator->fails()) {
                return back();
            } else {

                $id = Session::get('uid');
                $email = Session::get('id');
                $dbname = DB::select("select name from tbl_users_reg where id = $id");
                foreach ($dbname as $n) {
                    $name = $n->name;
                }

                $exist = DB::select("select email from tbl_review where outlet_id = $outletid and email='$email'");
                if (count($exist) == 0) {
                    $review = new Review([
                        'email' => $email,
                        'title' => $title,
                        'outlet_id' => $outletid,
                        'name' => $name,
                        'review' => $review,
                        'rating' => $rating,
                    ]);
                    $review->save();
                    return back()->with('success', 'Review posted');
                }
                if (count($exist) > 0) {
                    foreach ($exist as $e) {
                        $emaile = $e->email;
                    }
                    Review::where('email', $emaile)
                        ->where('outlet_id', $outletid)
                        ->update([
                            'title' => $request->get('title'),
                            'review' => $request->get('review'),
                            'rating' => $request->get('rating'),
                        ]);

                    return back()->with('success', 'Review updated');
                }
            }
        } else {

            $email = $request->get('email');
            $exist = DB::select("select email from tbl_review where outlet_id = $outletid and email = '$email'");
            if (count($exist) == 0) {
                $review = new Review([
                    'email' => $email,
                    'title' => $title,
                    'outlet_id' => $outletid,
                    'name' => $request->get('name'),
                    'review' => $review,
                    'rating' => $rating,
                ]);

                $review->save();
                return back()->with('success', 'Review posted');
            }
            if (count($exist) > 0) {
                foreach ($exist as $e) {
                    $emaile = $e->email;
                }
                if ($emaile == $email) {
                    //update review
                    $review = Review::where('email', $emaile)
                        ->where('outlet_id', $outletid)
                        ->update([
                            'title' => $title,
                            'review' => $review,
                            'rating' => $rating,
                            'name' => $request->get('name'),
                        ]);
                    return back()->with('success', 'Review updated');
                } else {
                    return back()->with('error', 'Error occured.. please try again');
                }
            }
        }
    }

    public function postingcheck()
    {
        $state = DB::table('tbl_state')->get();
        $cat = DB::select("select * from tbl_cat");
        return view('check-exist', compact('state', 'cat'));
    }

    public function checkpostexist(Request $request)
    {

        $name = $request->get('name');
        $city = $request->get('city');
        $cat = $request->get('cat');

        // $post = DB::table('tbl_outlet_prof')
        //     ->join('tbl_city', 'tbl_outlet_prof.city_id', '=', 'tbl_city.city_id')
        //     ->join('tbl_subcat', 'tbl_outlet_prof.subcat_id', '=', 'tbl_subcat.subcat_id')
        //     ->join('tbl_district', 'tbl_city.dist_id', '=', 'tbl_district.dist_id')
        //     ->join('tbl_state', 'tbl_district.state_id', '=', 'tbl_state.state_id')
        //     ->join('tbl_cat', 'tbl_subcat.cat_id', '=', 'tbl_cat.cat_id')
        //     ->where('tbl_cat.cat_id', '=', $cat)
        //     ->where('tbl_city.city', '=', $city)
        //     ->where('tbl_outlet_prof.outletname', LIKE, '%$name%')->get();

        $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
        `tbl_state` as sta, tbl_cat as cat,`tbl_district` as d WHERE l.city_id = c.city_id
        AND l.subcat_id=s.subcat_id and c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id`
        and s.cat_id = cat.cat_id and c.city_id=$city and cat.cat_id=$cat and l.outletname LIKE '%$name%'");

        $output = 0;
        if (count($post) > 0) {

            $output = ' <table class="table table-responsive dashboardtable tablemyads">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>';
            // return $output;
            foreach ($post as $p) {
                $output .= '
                <tr data-category="active">

                    <td data-title="Title">

                        <h3><a href="postdetails/' . $p->outletid . '">' . $p->outletname . '</a></h3>

                    </td>
                    <td data-title="Category"><span class="adcategories">' . $p->catagory . '</span>
                    </td>
                    <td data-title="Location"><span class="adcategories">' . $p->state . '-' . $p->district . '-' . $p->city . '</span>
                    </td>

                </tr>';

            }
            $output .= '</tbody> </table>';
            return $output;
        } else {

            return 0;
        }
    }
}