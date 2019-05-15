<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\SubCat;
use DB;
use Illuminate\Http\Request;
use Mail;
use Session;

class HomeController extends Controller
{

    public function index()
    {
        if (Session::get('id')) {
            $cat = DB::table('tbl_cat')->get();
            return view('LoginIndex', ['data' => $cat]);
        } else {
            $cat = DB::table('tbl_cat')->get();
            $state = DB::table('tbl_state')->get();
            $city = DB::table('tbl_city')->get();
            return view('index', ['data' => $cat], ['state' => $state], ['city' => $city]);
        }
    }

    public function subcatajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $subcat = SubCat::where("cat_id", $id)->get()->toJson();
        return $subcat;
    }

    public function distajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $dist = District::where("state_id", $id)->get()->toJson();
        return $dist;
    }

    public function cityajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $city = City::where("dist_id", $id)->get()->toJson();
        return $city;
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

    public function mailverify($id)
    {

        $code = str_random(8);
        try {
            //mail
            $data = array('email' => $id, 'code' => $code);

            Mail::send('emails.email1', $data, function ($message) use ($id) {

                $message->from('knowhere@gmail.com', 'Knowhere');
                $message->to($id, $id)->subject('Email verification at Knowhere');

            });
        } catch (\Exception $e) {

            return 1;
        }
        //insert code into table
        $exist = DB::select("SELECT `email` FROM `tbl_verify_mail` WHERE `email` = '$id'");
        if (empty($exist)) {
            DB::table('tbl_verify_mail')->insert(
                ['email' => $id, 'code' => $code, 'isverified' => 9]
            );
        } else {
            DB::table('tbl_verify_mail')
                ->where('email', $id)
                ->update(['code' => $code, 'isverified' => 9]);
        }
        return 0;

    }

    public function verifycode($vcode, $vmail)
    {
        $code = DB::select("select code from tbl_verify_mail where email = '$vmail'");
        //return $users = DB::table('tbl_verify_mail')->select('code')->where('email', $vmail)->get();
        foreach ($code as $c) {
            $dbcode = $c->code;
        }
        if ($vcode == $dbcode) {
            DB::select("UPDATE `tbl_verify_mail` SET `isverified`=8 WHERE email = '$vmail'");
            return 0;
        } else {
            return 1;
        }
    }

    public function fetchloc()
    {
        $c = $_POST['query'];
        if ($c) {

            $city = DB::select("select city as s from tbl_city where city like '%$c%'");
            $dist = DB::select("select district as s from tbl_district where district like '%$c%'");
            // $state = DB::select("select state as s from tbl_state where state like '%$c%'");
            $d = array_merge($city, $dist);
            //$d = response()->json($data);

            $output = '<ul >';
            foreach ($d as $row) {
                $output .= '
                <li class="load" style="background: #fff;
                height: 48px;
                width: 100%;
                line-height: 48px;
                padding: 0 20px;
                color: #646e7b;
                min-width: 250px;
                display: block;
                border-bottom: none;
                border-radius: 48px;
                margin-bottom: 3px;
                text-transform: none;
                font-size: 14px;
                letter-spacing: .7px;
                position: relative;
                -webkit-box-shadow: 0 12px 22px rgba(0, 0, 0, .2);
                box-shadow: 0 12px 22px rgba(0, 0, 0, .2);
                "><a href="#">' . $row->s . '</a></li>';
            }
            $output .= '</ul>';
            return $output;
        }
    }

    public function fetchlocal($id)
    {

        if ($id) {

            //return $loc = DB::table('tbl_locality')->where('locality', $id)->get();
            $loc = DB::select("select locality from tbl_locality where locality like '%$id%'");

            $output = '<ul>';
            foreach ($loc as $row) {
                $output .= '
                <li class="load" style="background: #fff;
                height: 48px;
                width: 100%;
                line-height: 48px;
                padding: 0 20px;
                color: #646e7b;
                min-width: 250px;
                display: block;
                border-bottom: none;
                border-radius: 48px;
                margin-bottom: 3px;
                text-transform: none;
                font-size: 14px;
                letter-spacing: .7px;
                position: relative;
                -webkit-box-shadow: 0 12px 22px rgba(0, 0, 0, .2);
                box-shadow: 0 12px 22px rgba(0, 0, 0, .2);
                "><a href="#">' . $row->locality . '</a></li>';
            }
            $output .= '</ul>';
            return $output;

        }
    }

    public function fetchads(Request $request)
    {
        $id = $request->id;
        $a = DB::table('tbl_advert')->select('ad_content')->where('ad_id', $id)->get();
        foreach ($a as $b) {
            $adimg = $b->ad_content;
        }
        return $adimg;
    }

    public function forgot()
    {
        return view('forgot_password');
    }
    public function services()
    {
        return view('services');
    }
    public function viewpost()
    {
        return view('viewpost');
    }
    public function privacy()
    {
        return view('privacy-setting');
    }

    public function categories()
    {
        return view('category');
    }

    public function about()
    {
        return view('about');
    }
    public function faq()
    {
        return view('faq');
    }
    public function contact()
    {
        return view('contact');
    }
    public function undermaintainence()
    {
        return view('undermaintainence');
    }
    public function pricing()
    {
        return view('pricing');
    }

    public function offer()
    {
        return view('offermessages');
    }
    public function howitworks()
    {
        return view('how-it-works');
    }

    public function notfound()
    {
        return view('404');
    }

    public function mypost()
    {
        return view('mypost');
    }
    public function coming()
    {
        return view('comingsoon');
    }

    public function dummy()
    {
        return view('myads');
        $name = ("'h'e'l_'_l'o'");
        str_replace(array("'", "'"), '', $name);

        try {
            // $geocode = app('geocoder')->reverse(43.882587, -103.454067)->get();
            //  Geocoder::reverse(9.59178059790211, 76.53152575399213)->get();
            return dd(app('geocoder')->reverse(9.59178059790211, 76.53152575399213)->get());

            //return $geocode;
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function loading()
    {
        return view('loading');

    }
    public function loadcomplete()
    {
        return redirect('/myads')->with('success', 'Payment successfull, You can now add the ad content!!')->with('warning', 'Your ad is ready, Remember to update the ad content then only it will become active');

    }

}