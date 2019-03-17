<?php

namespace App\Http\Controllers;

use App\RequestProf;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        if (isset($exist)) {
            return 1;
        } else {
            return 0;
        }
    }
}