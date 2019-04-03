<?php

namespace App\Http\Controllers;

use App\ListRqst;
use App\Reg;
use DB;
use Session;

class AdminController extends Controller
{
    public function approveoutlet()
    {
        $utype = Session::get('utype');
        if (Session::get('id') && $utype == 1) {
            $id = Session::get('id');
            $rqst = DB::select('SELECT * FROM `tbl_listing_rqst` as l, `tbl_city` as c,`tbl_subcat` as s,`tbl_status` as st, `tbl_state` as sta, `tbl_district` as d WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and c.`dist_id`=d.`dist_id` and d.`state_id`=sta.state_id');
            $total = ListRqst::count();
            $pending = ListRqst::where('status_id', '=', 3)->count();
            $approved = ListRqst::where('status_id', '=', 4)->count();
            // return view('approve-outlet', ['rqst' => $rqst], ['pending' => $pending], ['total' => $total], ['approved' => $approved]);
            return view('approve-outlet', compact('approved', 'pending', 'total', 'rqst'));
        } else {
            return redirect('/');
        }
    }

    public function usermanagement()
    {
        $utype = Session::get('utype');
        $id = Session::get('id');
        if (Session::get('id') && $utype == 1) {
            $urqst = DB::select('SELECT * FROM `tbl_users_reg` as l,`tbl_status` as st,`tbl_login` as lo WHERE l.status_id=st.status_id and l.id = lo.id and lo.utype_id = 3 ');
            $total = Reg::count();
            $active = Reg::where('status_id', '=', 1)->count(); //return no. by checking with utype_id
            $blocked = Reg::where('status_id', '=', 2)->count();//return no. by checking with utype_id
            // $blocked = DB::select('SELECT count(*) FROM tbl_user_reg where status_id =2');
            return view('user-management', compact('urqst', 'total', 'blocked', 'active'));
        } else {
            return redirect('/');
        }
    }

    public function outletmanagement()
    {
        $utype = Session::get('utype');
        if (Session::get('id') && $utype == 1) {
            $orqst = DB::select('SELECT * FROM `tbl_users_reg` as l, `tbl_city` as c,`tbl_status` as st, `tbl_login` as lg WHERE l.city_id = c.city_id and l.status_id=st.status_id and l.id=lg.id and lg.utype_id = 2');
            $total = Reg::count();
            $active = Reg::where('status_id', '=', 1)->count();
            $blocked = Reg::where('status_id', '=', 2)->count();
            return view('outlet-management', compact('orqst', 'total', 'blocked', 'active'));
        } else {
            return redirect('/');
        }
    }

}