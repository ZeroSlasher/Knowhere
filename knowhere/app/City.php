<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="tbl_city";
    protected $primarykey="city_id";

    public $fillable=[
        'city',
        
    ];
}
