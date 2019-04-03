<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;

class UOmngController extends Controller
{

    public function userblock()
    {
        $id = input::get('uregid');
        $mail = input::get('email');
        $usts = DB::select("SELECT `status_id` FROM `tbl_users_reg` WHERE `regid` = $id");
        foreach ($usts as $a) {
            if ($a->status_id == 2) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 1 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_users_reg` SET `status_id` = 1 WHERE `regid` = $id");
                return back()->with('success', 'User unblocked!');
            }
            if ($a->status_id == 1) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 2 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_users_reg` SET `status_id` = 2 WHERE `regid` = $id");
                return back()->with('warning', 'User blocked!');
            }
        }
    }

    public function ownerblock()
    {

        $id = input::get('oregid');
        $mail = input::get('email');
        $osts = DB::select("SELECT `status_id` FROM `tbl_users_reg` WHERE `regid` = $id");
        foreach ($osts as $a) {
            if ($a->status_id == 2) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 1 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_users_reg` SET `status_id` = 1 WHERE `regid` = $id");
                return back()->with('success', 'User unblocked!');
            }
            if ($a->status_id == 1) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 2 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_users_reg` SET `status_id` = 2 WHERE `regid` = $id");
                return back()->with('warning', 'User blocked!');
            }
        }
    }
}