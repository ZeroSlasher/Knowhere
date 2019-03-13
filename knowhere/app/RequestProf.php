<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestProf extends Model
{
    protected $table="tbl_listing_rqst";
    protected $primarykey="rqst_id";
    
    public $fillable=[
        'email',
        'outletname',
        'city_id',
        'phone',
        'ownername',
        'subcat_id',
            'Proof1',
            'Proof2',
            'Proof3',
            'status_id',
    ];
}
