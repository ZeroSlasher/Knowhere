<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table="tbl_district";
    protected $primarykey="dist_id";

    public $fillable=[
        'district',
        
    ];
}
