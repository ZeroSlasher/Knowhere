<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class OwnerController extends Controller
{
    public function mypostings()
    {
        $utype = Session::get('utype');
        $uid = Session::get('uid');
        if (Session::get('id')) {
            $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, tbl_cat as cat, `tbl_district` as d,tbl_users_reg as o,tbl_login as lo
            WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lo.`id`=l.`id` and s.cat_id = cat.cat_id and l.id=$uid");
            return view('mypostings', compact('post'));
        }
    }
    public function editpost($id)
    {
        Session::put('outletid', $id);
        $cat = DB::table('tbl_cat')->get();
        $state = DB::table('tbl_state')->get();
        $city = DB::table('tbl_city')->get();
        $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, `tbl_district` as d,tbl_users_reg as o,tbl_login as lg,
           tbl_cat as cat WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and s.cat_id = cat.cat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lg.`id`=l.`id`
            and l.outletid=$id");
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
        $subcat_id = $request->get('subcat'); //subcat value is there if cat is selected
        $city_id = $request->get('city');
        $website = $request->get('wsite');
        $phone1 = $request->get('phone1');
        $phone2 = $request->get('phone2');
        $status_id = 3;
        if (!empty($request->get('subcat'))) //if subcat is selected
        {
            // return 1;
            $Service_id = implode(",", $request->get('service')); //value of service is here
            DB::select("UPDATE `tbl_outlet_prof` SET `outletname`='$outletname',`ownername`='$ownername',
            `address`='$address',`description`='$description',`website`='$website',`subcat_id`=$subcat_id,
            `Service_id`='$Service_id',`phone1`='$phone1',`phone2`='$phone2' WHERE `outletid`=$oid");

            return redirect('/mypostings')->with('info', 'Posting updated');

        } else //if all are selected
        {
            // return 4;
            DB::select("UPDATE `tbl_outlet_prof` SET `outletname`='$outletname',`ownername`='$ownername',
           `address`='$address',`description`='$description',`website`='$website',`city_id`=$city_id,
           `phone1`='$phone1',`phone2`='$phone2' WHERE `outletid`=$oid");

            return redirect('/mypostings')->with('info', 'Posting updated');

        }

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
        try {
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
                return response()->json(['uploaded' => 'successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['err' => 'Error uploading file, Internal server error']);
        }

    }

    public function deleteupload($id)
    {
        DB::select("delete from tbl_prof_images where imgid = $id");
        return back()->with('success', 'image removed successfully');
    }

    public function editprofile()
    {
        $oid = Session::get('uid');
        $state = DB::table('tbl_state')->get();
        //$prof = DB::table('tbl_users_reg')->where('id', $oid)->get();
        $prof = DB::select("select * from tbl_users_reg as a,tbl_city as b,tbl_district as c,tbl_state as d where a.id = '$oid' and a.city_id = b.city_id and b.dist_id = c.dist_id and c.state_id = d.state_id");
        return view('edit-profile', compact('state', 'prof'));
    }

    public function updateownerprofile(Request $request)
    {
        $file = $request->file('prof');
        $own = $request->all();

        if ($request->hasFile('prof')) {
            $destinationPath = 'uploads/';
            $file = $request->file('prof');
            $file_name = $file->getClientOriginalName();
            $rename = time() . $file_name;
            $file->move($destinationPath, $rename);

            DB::select("UPDATE `tbl_users_reg` SET `name`='$own[own_name]',`city_id`=$own[city],
             `phone`='$own[cphone]',`oaddress`='$own[Address]',`image`='$rename' WHERE `id`=$own[id]");
            return back()->with('info', 'profile updated');
        } else {
            DB::select("UPDATE `tbl_users_reg` SET `name`='$own[own_name]',`city_id`=$own[city],
            `phone`='$own[cphone]',`oaddress`='$own[Address]' WHERE `id`=$own[id]");
            return back()->with('info', 'profile updated');
        }

        return back()->with('warning', 'Invalid data recived');

    }

    public function resetopwd()
    {
        $oid = Session::get('uid');
        $log = DB::table('tbl_login')->where('id', $oid)->get();
        return view('resetpwd', compact('log'));
    }

    public function changepassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npass' => 'required|regex:/^(?=.*\d).{8,15}$/',
            'cpass' => 'required|regex:/^(?=.*\d).{8,15}$/',
            'email' => 'required|regex:/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/',
        ]);
        $own = $request->all();
        if ($own['npass'] == null || $own['cpass'] == null || $own['curpass'] == null) {
            //return 3;
            return back()->with('error', 'All fields are mandatory');
        } elseif ($own['npass'] != $own['cpass']) {
            //return 2;
            return back()->with('error', 'passwords not matching');
        } elseif ($validator->fails()) {
            //return 1;
            return back()->with('error', 'Invalid input recieved');
        } else {
            // $uid = Session::get('uid');
            // $pwd = $own['npass'];
            // $hpwd = Hash::make($pwd);

            // DB::table('tbl_login')
            //     ->where('id', $uid)
            //     ->update(['email' => $request->get('email'), 'password' => $hpwd]);

            //reset pwd code
            return back()->with('success', 'password changed');

        }

    }

    public function addloc()
    {
        return 'add locations view';
    }

}