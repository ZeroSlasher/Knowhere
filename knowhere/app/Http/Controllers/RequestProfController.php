<?php

namespace App\Http\Controllers;

use App\Login;
use App\OutletProf;
use App\Reg;
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
        // return  $request;
        // return $request->get('_token');
        if ($request->has('_token')) {
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

        } else {
            return redirect('/')->with('msg', 'Invalid iInput recived');
        }

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

    public function rqstdisapprove($iid)
    {
        $csts = DB::select("SELECT `status_id` FROM `tbl_listing_rqst` WHERE `rqst_id` = $iid");
        foreach ($csts as $a) {
            if ($a->status_id == 4) {
                DB::select("UPDATE `tbl_listing_rqst` SET `status_id` = 3 WHERE `rqst_id` = $iid");
            }
        }
        return back()->with('warning', 'Request disapproved successfully!');
    }

    public function rqstapprove(Request $request)
    {
        $pwd = str_random(8);
        $hpwd = Hash::make($pwd);
        $id = Input::get('rqst_id');
        $mail = Input::get('email');

        // $connected = @fsockopen("www.google.com", 80);
        // if ($connected)
        // {
        try {
            //mail
            $data = array('name' => Input::get('owname'), 'oname' => Input::get('oname'), 'password' => $pwd, 'email' => $mail);
            Mail::send('emails.email', $data, function ($message) {
                $mail = Input::get('email');
                $reciver = Input::get('owname');
                $message->from('knowhere@gmail.com', 'Knowhere');
                $message->to($mail, $reciver)->subject('Account confirmation at Kowhere');

            });
        } catch (\Exception $e) {
            return back()->with('warning', $e)->with('warning', 'Network error!');
        }
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
                    $log = new Login([
                        'email' => $mail,
                        'password' => $hpwd,
                        'utype_id' => 2,
                        'status_id' => 1]);
                    $log->save();

                    // insert into ownreg table
                    $lastid = DB::getPdo()->lastInsertId();

                    $reg = new Reg([
                        'id' => $lastid,
                        'name' => Input::get('owname'),
                        'phone' => Input::get('phone'),
                        'city_id' => Input::get('cityid'),
                        'status_id' => 1]);
                    $reg->save();

                    //insert into outlet prof
                    $oregid = DB::getPdo()->lastInsertId();

                    $prof = new OutletProf([
                        'id' => $lastid,
                        'regid' => $oregid,
                        'outletname' => Input::get('oname'),
                        'ownername' => Input::get('owname'),
                        'city_id' => Input::get('cityid'),
                        'subcat_id' => Input::get('subcatid'),
                        'phone1' => Input::get('phone'),
                        'status_id' => Input::get('status'),
                    ]);
                    $prof->save();
                }
            }
        }
        return back()->with('info', 'Request approved successfully!')->with('success', 'Approval confirmation mail sent successfully!');
    }
}