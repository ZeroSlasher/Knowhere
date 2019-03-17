<?php

namespace App\Http\Controllers;

use DB;

class AdminController extends Controller
{
    public function approveoutlet()
    {
        $rqst = DB::select('SELECT * FROM `tbl_listing_rqst` as l, `tbl_city` as c,`tbl_subcat` as s,`tbl_status` as st WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id');
        //$rqst = ListRqst::all();
        return view('approve-outlet', ['rqst' => $rqst]);

    }

    public function usermanagement()
    {
        $urqst = DB::select('SELECT * FROM `tbl_user_reg` as l, `tbl_city` as c,`tbl_status` as st WHERE l.city_id = c.city_id and l.status_id=st.status_id');
        //$rqst = ListRqst::all();
        return view('user-management', ['urqst' => $urqst]);

    }

    public function outletmanagement()
    {
        $orqst = DB::select('SELECT * FROM `tbl_owner_reg` as l, `tbl_city` as c,`tbl_status` as st WHERE l.city_id = c.city_id and l.status_id=st.status_id');
        //$rqst = ListRqst::all();
        return view('outlet-management', ['orqst' => $orqst]);

    }

    public function rqstapprove($id)
    {

        $csts = DB::select("SELECT `status_id` FROM `tbl_listing_rqst` WHERE `rqst_id` = $id");
        foreach ($csts as $a) {
            if ($a->status_id == 3) {
                DB::select("UPDATE `tbl_listing_rqst` SET `status_id` = 4 WHERE `rqst_id` = $id");
            }
        }
        return redirect('/approveoutlet');

        //create account with the same credentials
    }
}