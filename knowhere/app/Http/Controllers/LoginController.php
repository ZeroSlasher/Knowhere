<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $a = Login::where('email', $email)->get();

        foreach ($a as $object) {
            if ($object->password == $password) {
                $semail = $object->email;
                $sutype = $object->utype_id;
                if ($object->utype_id == '1' && $object->status_id == 1) {
                    // session(['email'=>$semail]);
                    // session(['utype'=>$sutype]);
                    Session::put('email', $semail);
                    Session::put('utype', $sutype);

                    return redirect('/admindashboard');
                } elseif ($object->utype_id == '2' && $object->status_id == 1) {
                    session(['email' => $semail]);
                    session(['utype' => $sutype]);
                    return redirect('/ownerdashboard');
                } else {
                    session(['email' => $semail]);
                    session(['utype' => $sutype]);
                    return redirect('/userdashboard');
                }
            }
        }

        return redirect('/')->with('msg', 'incorrect login credentials');

    }
    public function logout()
    {
        //session_start();
        //session_destroy();
        Session::flush();
        return redirect('/')->with('msg', 'Logged out successfully');
    }
}