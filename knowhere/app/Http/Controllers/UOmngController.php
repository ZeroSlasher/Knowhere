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
        $usts = DB::select("SELECT `status_id` FROM `tbl_user_reg` WHERE `uregid` = $id");
        foreach ($usts as $a) {
            if ($a->status_id == 2) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 1 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_user_reg` SET `status_id` = 1 WHERE `uregid` = $id");
                return back()->with('success', 'User unblocked!');
            }
            if ($a->status_id == 1) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 2 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_user_reg` SET `status_id` = 2 WHERE `uregid` = $id");
                return back()->with('warning', 'User blocked!');
            }
        }
    }

    public function ownerblock()
    {

        $id = input::get('oregid');
        $mail = input::get('email');
        $osts = DB::select("SELECT `status_id` FROM `tbl_owner_reg` WHERE `oregid` = $id");
        foreach ($osts as $a) {
            if ($a->status_id == 2) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 1 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_owner_reg` SET `status_id` = 1 WHERE `oregid` = $id");
                return back()->with('success', 'User unblocked!');
            }
            if ($a->status_id == 1) {
                DB::select("UPDATE `tbl_login` SET `status_id` = 2 WHERE `email` = '$mail'");
                DB::select("UPDATE `tbl_owner_reg` SET `status_id` = 2 WHERE `oregid` = $id");
                return back()->with('warning', 'User blocked!');
            }
        }
    }
}