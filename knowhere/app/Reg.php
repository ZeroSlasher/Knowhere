<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{
    protected $table = "tbl_users_reg";
    protected $primarykey = "regid";

    public $fillable = [
        'id',
        'name',
        'phone',
        'city_id',
        'image',
        'oaddress',
        'image',
        'status_id',
    ];
}