<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\SubCat;
use DB;
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

    public function payment()
    {
        return view('payments');
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
        return view();
    }
}