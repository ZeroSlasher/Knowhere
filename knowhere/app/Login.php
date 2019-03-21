<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table="tbl_login";
    protected $primarykey="id";
    
    public $fillable=[
        'id',
        'email',
        'password',
        'utype_id',
        'status_id',
    ];

}