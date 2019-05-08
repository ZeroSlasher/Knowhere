<?php

namespace App\Http\Controllers;

use Hash;
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
            $posts = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, tbl_cat as cat, `tbl_district` as d,tbl_users_reg as o,tbl_login as lo
            WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`regid`=o.`regid` and lo.`id`=l.`id` and s.cat_id = cat.cat_id and l.id=$uid");
            if (count($posts) > 0) {
                return view('mypostings', compact('posts'));
            } elseif (count($posts) == 0) {

                return view('mypostings')->with('successMsg', 'No results found!!');
            }
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

        // str_replace(array("'", "'"), '', $request->get('Description'));
        $outletname = str_replace(array("'", "'"), '', $request->get('oname'));
        $ownername = str_replace(array("'", "'"), '', $request->get('owname'));
        $address = str_replace(array("'", "'"), '', $request->get('Address'));
        $description = str_replace(array("'", "'"), '', $request->get('Description'));
        $title = str_replace(array("'", "'"), '', $request->get('Title'));
        $subcat_id = $request->get('subcat'); //subcat value is there if cat is selected
        $city_id = $request->get('city');
        $website = $request->get('wsite');
        $phone1 = $request->get('phone1');
        $phone2 = $request->get('phone2');
        $lat = $request->get('lat');
        $lng = $request->get('lng');
        $email = $request->get('oemail');
        $status_id = 3;
        if (!empty($request->get('subcat'))) //if subcat is selected
        {
            // return 1;
            $Service_id = implode(",", $request->get('service')); //value of service is here
            DB::select("UPDATE `tbl_outlet_prof` SET `outletname`='$outletname',`ownername`='$ownername',`latitude`=$lat,
            `longitude` = $lng,`address`='$address',`description`='$description',`website`='$website',`otitle`='$title',
            `subcat_id`=$subcat_id,`oemail`='$email',
            `Service_id`='$Service_id',`phone1`='$phone1',`phone2`='$phone2' WHERE `outletid`=$oid");

            return redirect('/mypostings')->with('info', 'Posting updated');

        } else //if all are selected
        {
            // return 4;
            DB::select("UPDATE `tbl_outlet_prof` SET `outletname`='$outletname',`ownername`='$ownername',`latitude`=$lat,
            `longitude` = $lng,`oemail`='$email',
           `address`='$address',`description`='$description',`website`='$website',`otitle`='$title',`city_id`=$city_id,
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
        $title = str_replace(array("'", "'"), '', $own['title']);
        if ($request->hasFile('prof')) {
            $destinationPath = 'uploads/';
            $file = $request->file('prof');
            $file_name = $file->getClientOriginalName();
            $rename = time() . $file_name;
            $file->move($destinationPath, $rename);

            DB::select("UPDATE `tbl_users_reg` SET `name`='$own[own_name]',`city_id`=$own[city],
            `title`='$title', `phone`='$own[cphone]',`oaddress`='$own[Address]',`image`='$rename' WHERE `id`=$own[id]");
            return back()->with('info', 'profile updated');
        } else {
            DB::select("UPDATE `tbl_users_reg` SET `name`='$own[own_name]',`city_id`=$own[city],
            `title`='$title',`phone`='$own[cphone]',`oaddress`='$own[Address]' WHERE `id`=$own[id]");
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
        $own = $request->all();
        if (array_key_exists('email', $own)) {
            //return 1;
            $validator = Validator::make($request->all(), [
                'curpass' => 'required|regex:/^(?=.*\d).{8,15}$/',
                'npass' => 'required|regex:/^(?=.*\d).{8,15}$/',
                'cpass' => 'required|regex:/^(?=.*\d).{8,15}$/',
                'email' => 'required|regex:/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/',
            ]);
        } else {
            //return 2;

            $validator = Validator::make($request->all(), [
                // 'curpass' => 'required|regex:/^(?=.*\d).{8,15}$/',
                'curpass' => 'required',
                'npass' => 'required|regex:/^(?=.*\d).{8,15}$/',
                'cpass' => 'required|regex:/^(?=.*\d).{8,15}$/',
            ]);
        }

        if ($own['npass'] != $own['cpass']) {
            //return 3;
            return back()->with('error', 'passwords not matching');
        } elseif ($validator->fails()) {
            //return 4;
            return back()->with('error', 'Empty or Invalid entry recieved');
        } else {
            //return 5;
            $uid = Session::get('uid');
            $cpwd = $own['curpass'];
            $pwd = $own['npass'];
            $hpwd = Hash::make($pwd);
            //if current pwd is correct
            $currentp = DB::select("select password from tbl_login where id = $uid");
            foreach ($currentp as $cp) {
                $crntpass = $cp->password;
            }

            if (Hash::check($cpwd, $crntpass)) {
                //return 6;
                if (array_key_exists('email', $own)) {
                    //return 7;
                    DB::table('tbl_login')
                        ->where('id', $uid)
                        ->update(['email' => $request->get('email'), 'password' => $hpwd]);

                    return back()->with('success', 'Email and Password changed');
                } else {
                    //return 8;
                    DB::table('tbl_login')
                        ->where('id', $uid)
                        ->update(['password' => $hpwd]);

                    return back()->with('success', 'Password changed');
                }
            } else {

                //return 9;
                return back()->with('error', 'Incorrect Password');

            }

        }

    }

    public function payment($id)
    {
        $detail = DB::table('tbl_advert')
            ->join('tbl_users_reg', 'tbl_advert.id', '=', 'tbl_users_reg.id')
            ->join('tbl_outlet_prof', 'tbl_advert.outletid', '=', 'tbl_outlet_prof.outletid')
            ->join('tbl_package', 'tbl_advert.pkg_id', '=', 'tbl_package.pkg_id')
            ->join('tbl_status', 'tbl_advert.status_id', '=', 'tbl_status.status_id')
            ->where('ad_id', $id)->get();

        return view('payments', compact('detail'));
    }

    public function dopayment(Request $request)
    {

        $uid = Session::get('uid');
        $id = $request->get('id');
        $cname = $request->get('cname');
        $cc_number = $request->get('cc_number');

        if ($request->get('ctype')) {
            $c_type = $request->get('ctype');
        } else {
            $c_type = 'not specified';
        }
        $cvv = $request->get('cvv');
        $month = $request->get('month');
        $year = $request->get('year');
        $amount = $request->get('amount');

        DB::table('tbl_advert')
            ->where('ad_id', $id)
            ->update(['p_status' => 10]);

        DB::table('tbl_payments')->insert(
            ['id' => $uid, 'ad_id' => $id, 'cname' => $cname, 'cc_number' => $cc_number,
                'ctype' => $c_type, 'cvv' => $cvv, 'month' => $month, 'year' => $year, 'amount' => $amount, 'status_id' => 10,
            ]);

        return redirect('/myads')->with('success', 'Payment successfull, You can now add the ad content!!')->with('warning', 'Your ad is ready, Remember to update the ad content then only it will become active');
    }

    public function addloc()
    {
        $own = DB::table('tbl_users_reg')
            ->join('tbl_city', 'tbl_users_reg.city_id', '=', 'tbl_city.city_id')
            ->where('id', Session::get('uid'))->get();
        foreach ($own as $c) {
            $city = $c->city_id;
        }
        $local = DB::table('tbl_locality')->where('city_id', $city)->get();
        return view('addloc', compact('own', 'local'));
    }

    public function addad()
    {
        $outlet = DB::table('tbl_outlet_prof')->where('id', Session::get('uid'))->get();
        return view('add-ad', compact('outlet'));
    }

    public function addadvert(Request $request)
    {
        $id = Session::get('uid');
        $outletid = $request->get('outlet');
        $pkg = $request->get('pkg');
        if ($pkg == 1) {
            $exp = 10;
        } elseif ($pkg == 2) {
            $exp = 20;
        } elseif ($pkg == 3) {
            $exp = 30;
        }
        $status_id = 7; //7-hidden 1-active
        $p_status = 11; //10-complete, 11-incomplete

        DB::table('tbl_advert')->insert(
            ['id' => $id, 'outletid' => $outletid, 'pkg_id' => $pkg,
                'status_id' => $status_id, 'validity' => $exp, 'p_status' => $p_status]
        );

        $lastid = DB::getPdo()->lastInsertId();

        return redirect()->action('OwnerController@payment', ['id' => $lastid]);

    }

    public function myads()
    {
        $outlet = DB::table('tbl_advert')
            ->join('tbl_users_reg', 'tbl_advert.id', '=', 'tbl_users_reg.id')
            ->join('tbl_outlet_prof', 'tbl_advert.outletid', '=', 'tbl_outlet_prof.outletid')
            ->join('tbl_package', 'tbl_advert.pkg_id', '=', 'tbl_package.pkg_id')
            ->join('tbl_status', 'tbl_advert.status_id', '=', 'tbl_status.status_id')
            ->where('tbl_advert.id', Session::get('uid'))->get();
        if (count($outlet) == 0) {
            return view('myads')->with('successMsg', 'No data found');

        } else {

            $total = count($outlet);
            return view('myads', compact('outlet', 'total'));

        }
    }

    public function deletead($id)
    {

        DB::table('tbl_advert')->where('ad_id', $id)->delete();
        return back()->with('warning', 'Ad removed successfully');

    }

    public function edit_s_ad($id)
    {
        $detail = DB::table('tbl_advert')->where('ad_id', $id)->get();
        foreach ($detail as $d) {
            $status = $d->status_id;
            $psts = $d->p_status;
        }
        if ($psts == 11) {
            return back()->with('error', 'Complete payment to change status');

        } else {
            if ($status == 1) {
                DB::table('tbl_advert')
                    ->where('ad_id', $id)
                    ->update(['status_id' => 7]);
                return back()->with('warning', 'Ad has been hidden successfully');
            } else {

                DB::table('tbl_advert')
                    ->where('ad_id', $id)
                    ->update(['status_id' => 1]);
                return back()->with('warning', 'Ad has been activated successfully');

            }
        }
    }

    public function editad(Request $request, $id)
    {
        if ($request->has('_token')) {
            $file_path = 'uploads/ads/';
            $file = $request->file('file');

            $fname = time() . $file->getClientOriginalName();
            $file->move($file_path, $fname);
            $ad = DB::table('tbl_advert')->where('ad_id', $id)->get();
            foreach ($ad as $a) {
                $val = $a->validity;
            }
            DB::table('tbl_advert')
                ->where('ad_id', $id)
                ->update(['ad_content' => $fname, 'expiring_in' => $val, 'status_id' => 1]);

            return back()->with('success', 'Ad content has been updated and your ad is now active');

        } else {
            return back()->with('error', 'Invalid iInput recived');
        }

    }
}