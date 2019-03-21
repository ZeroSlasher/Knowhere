<?php

namespace App\Http\Controllers;

use App\ListRqst;
use App\OutletReg;
use App\Reg;
use DB;

class AdminController extends Controller
{
    public function approveoutlet()
    {
        $rqst = DB::select('SELECT * FROM `tbl_listing_rqst` as l, `tbl_city` as c,`tbl_subcat` as s,`tbl_status` as st, `tbl_state` as sta, `tbl_district` as d WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and c.`dist_id`=d.`dist_id` and d.`state_id`=sta.state_id');
        $total = ListRqst::count();
        $pending = ListRqst::where('status_id', '=', 3)->count();
        $approved = ListRqst::where('status_id', '=', 4)->count();
        // return view('approve-outlet', ['rqst' => $rqst], ['pending' => $pending], ['total' => $total], ['approved' => $approved]);
        return view('approve-outlet', compact('approved', 'pending', 'total', 'rqst'));
    }

    public function usermanagement()
    {
        $urqst = DB::select('SELECT * FROM `tbl_user_reg` as l,`tbl_status` as st WHERE l.status_id=st.status_id');
        $total = Reg::count();
        $active = Reg::where('status_id', '=', 1)->count();
        $blocked = Reg::where('status_id', '=', 2)->count();
        // $blocked = DB::select('SELECT count(*) FROM tbl_user_reg where status_id =2');
        return view('user-management', compact('urqst', 'total', 'blocked', 'active'));

    }

    public function outletmanagement()
    {
        $orqst = DB::select('SELECT * FROM `tbl_owner_reg` as l, `tbl_city` as c,`tbl_status` as st, `tbl_login` as lg WHERE l.city_id = c.city_id and l.status_id=st.status_id and l.id=lg.id');
        $total = OutletReg::count();
        $active = OutletReg::where('status_id', '=', 1)->count();
        $blocked = OutletReg::where('status_id', '=', 2)->count();
        return view('outlet-management', compact('orqst', 'total', 'blocked', 'active'));

    }

}