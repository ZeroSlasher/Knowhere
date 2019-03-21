<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutletReg extends Model
{
    protected $table = "tbl_owner_reg";
    protected $primarykey = "oregid";

    public $fillable = [
        'id',
        'name',
        'phone',
        'city_id',
        'image',
        'address',
        'status_id',
    ];
}