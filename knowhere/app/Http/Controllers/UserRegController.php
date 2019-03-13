<?php

namespace App\Http\Controllers;

use App\Reg;
use App\Login;
use Illuminate\Http\Request;

class UserRegController extends Controller
{

    public function register(Request $request)
    {
        
         
        $reg = new Reg([
            'email'=>$request->get('mail'),
            'name'=> $request->get('name'),
            'phone'=>$request->get('phone'),
        ]);
        $reg -> save();


        $log = new Login([
            'email'=> $request->get('mail'),
            'password'=> $request->get('pwd'),
            'utype_id'=> 1,
            'status_id'=>1,
        ]);
        
        $log-> save();
        return redirect('/');
    }

}
