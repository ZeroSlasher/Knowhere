<?php

namespace App\Http\Controllers;

// session_start();
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
            return view('LoginIndex');
        } else {
            $cat = DB::table('tbl_cat')->get();
            $state = DB::table('tbl_state')->get();
            $city = DB::table('tbl_city')->get();
            return view('index', ['data' => $cat], ['state' => $state], ['city' => $city]);
        }
    }

    public function lindex()
    {
        return view('LoginIndex');
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

    public function editpost($id)
    {
        $cat = DB::table('tbl_cat')->get();
        $state = DB::table('tbl_state')->get();
        $city = DB::table('tbl_city')->get();
        $post = DB::select("SELECT * FROM `tbl_outlet_prof` as l, `tbl_city` as c,`tbl_subcat` as s,
            `tbl_status` as st, `tbl_state` as sta, `tbl_district` as d,tbl_owner_reg as o,tbl_login as log
            WHERE l.city_id = c.city_id AND l.subcat_id=s.subcat_id and l.status_id=st.status_id and
            c.`dist_id`=d.`dist_id` and d.`state_id`=sta.`state_id` and l.`oregid`=o.`oregid` and log.`id`=l.`id`
            and l.outletid=$id");
        return view('editpost', compact('cat', 'state', 'city', 'post'));
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
    public function listing_list()
    {
        return view('listing_list');
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
    public function posting()
    {
        return view('posting');
    }
    public function posting1()
    {
        return view('posting1');
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
    public function editprofile()
    {
        return view('edit-profile');
    }
    public function postdetails()
    {
        return view('postdetails');
    }
    public function notfound()
    {
        return view('404');
    }
    public function deleteprofile()
    {
        return view('delete-profile');
    }
    public function mypost()
    {
        return view('mypost');
    }
    public function coming()
    {
        return view('comingsoon');
    }

}