<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Contracts\Auth\Authenticatable;

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
    protected $hidden = [
        'password', 'remember_token',
    ];
}
