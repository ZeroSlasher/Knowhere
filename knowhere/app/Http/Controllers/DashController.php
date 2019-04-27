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
            $udata = DB::table('tbl_users_reg')
                ->join('tbl_city', 'tbl_users_reg.city_id', '=', 'tbl_city.city_id')
                ->where('id', $uid)->get();

            return view('owner_dashboard', compact('udata'));
        } else {
            return redirect('/');
        }
    }
    public function userdash()
    {
        $utype = Session::get('utype');
        if (Session::get('id') && $utype == 3) {
            $udata = DB::table('tbl_users_reg')
                ->join('tbl_city', 'tbl_users_reg.city_id', '=', 'tbl_city.city_id')
                ->where('id', $uid)->get();

            return view('user_dashboard', compact('udata'));
        } else {
            return redirect('/');
        }
    }
}