<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{
    protected $table = "tbl_user_reg";
    protected $primarykey = "uregid";

    public $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'image',
        'status_id'

    ];
}