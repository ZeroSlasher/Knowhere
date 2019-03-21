<?php

namespace App\Http\Controllers;

use App\Login;
use App\OutletReg;
use App\RequestProf;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use Redirect;

class RequestProfController extends Controller
{
    public function request(Request $request)
    {
        $file_path = 'uploads/';
        $proof1 = Input::file('proof1');
        $proof2 = Input::file('proof2');
        $proof3 = Input::file('proof3');

        //$Proof1 = $request->get('Proof1');
        $Proof1_name = time() . $proof1->getClientOriginalName();
        $proof1->move($file_path, $Proof1_name);

        // $Proof2 = $request->get('Proof2');
        $Proof2_name = time() . $proof2->getClientOriginalName();
        $proof2->move($file_path, $Proof2_name);

        // $Proof3 = $request->get('Proof3');
        $Proof3_name = time() . $proof3->getClientOriginalName();
        $proof3->move($file_path, $Proof3_name);

        $rqst = new RequestProf([
            'email' => $request->get('remail'),
            'outletname' => $request->get('est_name'),
            'city_id' => $request->get('city'),
            'phone' => $request->get('cphone'),
            'ownername' => $request->get('own_name'),
            'subcat_id' => $request->get('subcat'),
            'Proof1' => $Proof1_name,
            'Proof2' => $Proof2_name,
            'Proof3' => $Proof3_name,
            'status_id' => 3,

        ]);
        $rqst->save();
        return redirect('/')->with('msg', 'Request Submitted successfully.. You will be informed via email on the approval of the request');

    }

    public function mailcheck($id)
    {

        $exist = DB::select("SELECT `email` FROM `tbl_login` WHERE `email` = '$id'");
        if (empty($exist)) {
            return 0;
        } else {
            return 1;
        }
    }

    public function rqstdisapprove($id)
    {

        $csts = DB::select("SELECT `status_id` FROM `tbl_listing_rqst` WHERE `rqst_id` = $id");
        foreach ($csts as $a) {
            if ($a->status_id == 4) {
                DB::select("UPDATE `tbl_listing_rqst` SET `status_id` = 3 WHERE `rqst_id` = $id");
            }
        }
        // return redirect('/approveoutlet');
        return back()->with('warning', 'Request disapproved successfully!');

    }

    public function rqstapprove(Request $request)
    {

        $id = Input::get('rqst_id');
        $mail = Input::get('email');

        $csts = DB::select("SELECT `status_id` FROM `tbl_listing_rqst` WHERE `rqst_id` = $id");
        foreach ($csts as $a) {
            if ($a->status_id == 4) {
                // return redirect('/approveoutlet');
                return back()->with('info', 'Request already approved!');
            } else {
                //1.approval
                DB::select("UPDATE `tbl_listing_rqst` SET `status_id` = 4 WHERE `rqst_id` = $id");

                //2.Account creation
                $check = DB::select("SELECT `email` FROM `tbl_login` WHERE `email` = '$mail'");

                if (empty($check)) {
                    $pwd = str_random(8);
                    $hpwd = Hash::make($pwd);
                    $log = new Login([
                        'email' => $mail,
                        'password' => $hpwd,
                        'utype_id' => 2,
                        'status_id' => 1]);
                    $log->save();

                    // insert into ownreg table
                    $lastid = DB::getPdo()->lastInsertId();
                    $reg = new OutletReg([
                        'id' => $lastid,
                        'name' => Input::get('owname'),
                        'phone' => Input::get('phone'),
                        'city_id' => Input::get('cityid'),
                        'status_id' => 1]);
                    $reg->save();
                }
            }
        }
        //mail
        $data = array('name' => Input::get('owname'), 'oname' => Input::get('oname'), 'password' => $pwd, 'email' => $mail);

        Mail::send('emails.email', $data, function ($message) {
            $mail = Input::get('email');;
            $reciver = Input::get('owname');
            $message->from('knowhere@gmail.com', 'Knowhere');

            $message->to($mail, $reciver)->subject('Account confirmation at Kowhere');

        });
        // return redirect('/approveoutlet')
        return back()->with('success', 'Request approved successfully!')->with('success', 'Approval confirmation mail sent successfully!');
    }
    // public function sendEmail()
    // {
    //     $two = 2;

    //     $data = array('name' => "Learning Laravel", 'two' => $two);

    //     Mail::send('emails.email', $data, function ($message) {
    //         $mail = 'albinsalu@gmail.com';
    //         $reciver = 'ZeroSlasher';
    //         $message->from('knowhere@gmail.com', 'Knowhere');

    //         $message->to($mail, $reciver)->subject('Test mail');

    //     });

    //     if (Mail::failures()) {
    //         return back()->with('warning', 'Sorry! Please try again latter!');
    //     } else {
    //         return back()->with('success', 'Great! Successfully send in your mail!');
    //     }

    // }
}