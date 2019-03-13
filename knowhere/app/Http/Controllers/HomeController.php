<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\SubCat;
use App\City;
use App\District;
use DB;

class HomeController extends Controller
{
    public function index(){
        $cat = DB::table('tbl_cat')->get(); 
        $state = DB::table('tbl_state')->get(); 
        $city = DB::table('tbl_city')->get();  
        return view('index',['data' => $cat ],['state' => $state ],['city' => $city ]);

   }

   public function subcatajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $subcat = SubCat::where("cat_id",$id)->get()->toJson();
        return $subcat;
    }

    public function distajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $dist = District::where("state_id",$id)->get()->toJson();
        return $dist;
    }

    public function cityajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $city = City::where("dist_id",$id)->get()->toJson();
        return $city;
    }

   public function ownerprofile(){
    //return view('ownerprofile');
    return 'this is owner profile page';
}
}
