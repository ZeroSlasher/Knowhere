<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutletProf extends Model
{
    protected $table = "tbl_outlet_prof";
    protected $primarykey = "outletid";

    public $fillable = [
        'id',
        'regid',
        'otitle',
        'outletname',
        'ownername',
        'address',
        'description',
        'website',
        'city_id',
        'latitude',
        'longitude',
        'subcat_id',
        'Service_id',
        'phone1',
        'phone2',
        'status_id',
    ];
}