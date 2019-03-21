<?php

namespace App\Http\Controllers;

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
        if (Session::get('id') && $utype == 2) {
            return view('owner_dashboard');
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