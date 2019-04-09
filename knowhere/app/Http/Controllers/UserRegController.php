<?php

namespace App\Http\Controllers;

use App\Login;
use DB;
use Hash;
use Illuminate\Http\Request;

class UserRegController extends Controller
{

    public function register(Request $request)
    {

        // echo $request->get('mail');
        // echo $request->get('name');
        // echo $request->get('phone');
        $pwd = $request->get('pwd');
        $hpwd = Hash::make($pwd);
        $log = new Login([
            'email' => $request->get('mail'),
            'password' => $hpwd,
            'utype_id' => 3,
            'status_id' => 1,
        ]);

        $log->save();

        $usr = new User([
            'email' => $request->get('mail'),
            'password' => $hpwd,
            'utype_id' => 3,
            'status_id' => 1,
        ]);

        $log->save();

        $lastid = DB::getPdo()->lastInsertId();
        $reg = new Reg([
            'id' => $lastid,
            'email' => $request->get('mail'),
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'status_id' => 1,
        ]);
        $reg->save();

        return redirect('/')->with('msg', 'Regestration Successfull..Please login');
    }

}