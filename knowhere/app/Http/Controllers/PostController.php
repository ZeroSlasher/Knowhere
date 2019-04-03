<?php

namespace App\Http\Controllers;

use App\Images;
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
        return view('posting', compact('state', 'cat'));
    }

    public function Addpostingu()
    {
        $cat = DB::table('tbl_cat')->get();
        $state = DB::table('tbl_state')->get();
        return view('postingu', compact('state', 'cat'));
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
}