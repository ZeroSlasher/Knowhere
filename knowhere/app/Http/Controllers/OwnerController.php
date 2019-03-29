<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OwnerController extends Controller
{
    public function editpost($id)
    {
        Session::put('outletid', $id);
        $cat = DB::table('tbl_cat')->get();
        $state = DB::table('tbl_state')->get();
        $city = DB::table('tbl_city')->get();
        $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, `tbl_district` as d,tbl_owner_reg as o,tbl_login as log
            WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`oregid`=o.`oregid` and log.`id`=l.`id`
            and l.outletid=$id");
        // $service = DB::table('tbl_services')->get();
        return view('editpost', compact('cat', 'state', 'city', 'post'));
    }

    public function updatepost(Request $request)
    {
        $request->all();
        $oid = $request->get('outletid');

        $outletname = $request->get('oname');
        $ownername = $request->get('owname');
        $address = $request->get('Address');
        $description = $request->get('Description');
        $subcat_id = $request->get('subcat');
        $city_id = $request->get('city');
        if (!empty($request->get('service'))) {
            $Service_id = implode(",", $request->get('service'));

            $website = $request->get('wsite');
            $phone1 = $request->get('phone1');
            $phone2 = $request->get('phone2');
            $status_id = 3;

            DB::select("UPDATE `tbl_outlet_prof` SET `outletname`='$outletname',`ownername`='$ownername',
       `address`='$address',`description`='$description',`website`='$website',`city_id`=$city_id,`subcat_id`=$subcat_id,
       `Service_id`='$Service_id',`phone1`='$phone1',`phone2`='$phone2' WHERE `outletid`=$oid");
        }
        return redirect('/ownerdashboard')->with('info', 'Posting updated');

    }

    public function fetchservice($id)
    {
        $service = DB::select("select * from tbl_services where subcat_id = $id");
        return $service;
    }

    public function editpostimg($id)
    {
        Session::put('outletid', $id);
        $img = DB::table('tbl_prof_images')->where('outletid', $id)->get();
        return view('editpostimg', compact('img'));
    }

    public function storeimg(Request $request)
    {
        $outlet = Session::get('outletid');

        if ($request->hasFile('file')) {
            $destinationPath = 'uploads/';
            $file = $request->file('file'); // will get all files
            // foreach ($files as $file) {
            $file_name = $file->getClientOriginalName(); //Get file original name
            $rename = time() . $file_name;
            $file->move($destinationPath, $rename); // move files to destination folder

            //database code here
            DB::select("INSERT INTO `tbl_prof_images`(`outletid`, `imgname`) VALUES ($outlet,'$rename')");

            // }
            return response()->json(['uploaded'=>'successfully']);
        }

    }

    public function deleteupload($id){
        DB::select("delete from tbl_prof_images where imgid = $id");
        return back()->with('success','image removed successfully');
    }
}