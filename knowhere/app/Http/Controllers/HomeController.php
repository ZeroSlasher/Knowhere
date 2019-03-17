<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
session_start();
use App\Cat;
use App\SubCat;
use App\City;
use App\District;
use DB;
use Session;

class HomeController extends Controller
{

    public function index(){
        if(Session::get('email'))
        {
            return view('LoginIndex'); 
        }
        else
        {
        $cat = DB::table('tbl_cat')->get(); 
        $state = DB::table('tbl_state')->get(); 
        $city = DB::table('tbl_city')->get();  
        return view('index',['data' => $cat ],['state' => $state ],['city' => $city ]);
        }
}

   public function lindex()
   {
    return view('LoginIndex');
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


}