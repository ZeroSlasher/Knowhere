<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListRqst extends Model
{
    protected $table="tbl_listing_rqst";
    protected $primarykey="rqst_id";
    
    public $fillable=[
        'rqst_id',
        'email',
        'outletname',
        'city_id',
        'phone',
        'ownername',
        'Proof1',
        'Proof2',
        'Proof3',
        'status_id',

    ];
}