<?php

namespace App\Http\Controllers;

use App\Login;
use DB;
use Hash;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->get('email');
        $hash = $request->get('password');
        //$password = Hash::make($hash);//make hash of plain text pwd

        //Hash::check($hash, $password);//for checking

        $a = Login::where('email', $email)->get();

        foreach ($a as $object) {

            $dbpwd_h = $object->password; //hash
            $hash; //plain

            if (Hash::check($hash, $dbpwd_h)) {

                $sutype = $object->utype_id;
                $semail = $object->email;
                $uid = $object->id;

                if ($object->status_id == 2) {
                    return redirect('/')->with('msg', 'User account temporarily blocked');

                } else {
                    if ($object->utype_id == '1' && $object->status_id == 1) {
                        // session(['email'=>$semail]);
                        // session(['utype'=>$sutype]);
                        Session::put('id', $semail);
                        Session::put('uid', $uid);
                        Session::put('utype', $sutype);
                        return redirect('/admindashboard');
                    } elseif ($object->utype_id == '2' && $object->status_id == 1) {
                        Session::put('id', $semail);
                        Session::put('uid', $uid);
                        Session::put('utype', $sutype);

                        $ownreg = DB::table('tbl_owner_reg')->get();
                        foreach ($ownreg as $own) {
                            $name = $own->name;
                        }
                        Session::put('name', $name);

                        return redirect('/ownerdashboard');
                    } else if ($object->utype_id == '3' && $object->status_id == 1) {
                        Session::put('id', $semail);
                        Session::put('uid', $uid);
                        Session::put('utype', $sutype);

                        $usrreg = DB::table('tbl_user_reg')->get();
                        foreach ($usrreg as $usr) {
                            $name = $usr->name;
                        }
                        Session::put('name', $name);
                        return redirect('/userdashboard');
                    }
                }
            }
        }

        return redirect('/')->with('msg', 'incorrect login credentials');

    }
    public function logout()
    {
        //session_start();
        //session_destroy();
        Session::forget(['id', 'utype']);
        Session::flush();
        return redirect('/')->with('msg', 'Logged out successfully');
    }
}