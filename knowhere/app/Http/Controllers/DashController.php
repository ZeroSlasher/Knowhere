<?php

namespace App\Http\Controllers;

use DB;
use Session;

class DashController extends Controller
{
    public function admindash()
    {
        $utype = Session::get('utype');
        if (Session::get('id') && $utype == 1) {
            return view('admin_dashboard');
        } else {
            return redirect('/');
        }
    }

    public function owndash()
    {
        $utype = Session::get('utype');
        $uid = Session::get('uid');
        if (Session::get('id') && $utype == 2) {
            $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, `tbl_district` as d,tbl_owner_reg as o,tbl_login as log
            WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`oregid`=o.`oregid` and log.`id`=l.`id`
            and l.id=$uid");
            return view('owner_dashboard', compact('post'));
        } else {
            return redirect('/');
        }
    }
    public function userdash()
    {
        $utype = Session::get('utype');
        if (Session::get('id') && $utype == 3) {
            return view('user_dashboard');
        } else {
            return redirect('/');
        }
    }
}