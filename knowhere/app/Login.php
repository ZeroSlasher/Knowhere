<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table="tbl_login";
    protected $primarykey="login_id";
    
    public $fillable=[
        'email',
        'password',
        'utype_id',
        'status_id',
    ];

}