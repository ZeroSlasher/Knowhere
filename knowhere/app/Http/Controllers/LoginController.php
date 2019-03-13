<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        // 
        $email = $request->get('email');
        $password= $request->get('password');
        $a=Login::where('email',$email)->where('password',$password)->get();
        //$b=Login::where('email',$email)->where('password',$password)->where('status',2)->get();
       // Auth::login($a);
        //return Auth::user();
        foreach ($a as $object) {

            if($object->email=$email){
               // return $object;
              // session(['email'=>$email]);
               // $value=session('email');
              
                if($object->utype_id == '1')
                {
                    

                    // session(['email'=>$email]);
                return redirect('/ownerprofile');
            }
            else if($object->utype == 2){
              //  session(['email'=>$email]);
                // session(['status2'=>$email]);
                // return redirect('/adminindex');
            }
                
            }
            
            else{
                //return redirect('/login')->with('success','wrong username/password');
                //return "aa";
            }
            
        }
        $msg = [
            'message' => 'Please check your credentials!',
           ];
    
       return redirect('/login')->with($msg);
        //return redirect('/login')->with('success','wrong username/password');
        //return redirect('/login')->back()->with('message', 'IT WORKS!');
    }
}
