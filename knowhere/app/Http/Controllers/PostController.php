<?php

namespace App\Http\Controllers;

use App\OutletProf;
use App\OutletReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function Addposting()
    {
        $cat = DB::table('tbl_cat')->get();
        $state = DB::table('tbl_state')->get();
        return view('posting', compact('state', 'cat'));
    }

    public function addpost(Request $request)
    {
        $all = $request->all();
        $service = implode(",", $request->get('service'));
        $id = Session::get('uid');
        $oreg = OutletReg::select('oregid')->where('id', $id)->get();
        foreach ($oreg as $o) {
            $oregid = $o->oregid;
        }

        $post = new OutletProf([

            'id' => $id,
            'oregid' => $oregid,
            'outletname' => '$all[oname]',
            'ownername' => '$all[owname]',
            'address' => '$all[Address]',
            'description' => '$all[Description]',
            'city_id' => $all['city'],
            'subcat_id' => $all['subcat'],
            'website' => '$all[wsite]',
            'Service_id' => $service,
            'phone1' => $all['phone1'],
            'phone2' => $all['phone2'],
            'status_id' => 1,

        ]);
        $post->save();
        return back()->with('success', 'Posting added');
    }
}