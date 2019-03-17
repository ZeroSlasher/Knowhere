<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table="tbl_login";
    protected $primarykey="email";
    
    public $fillable=[
        'email',
        'password',
        'utype_id',
        'status_id',
    ];

}