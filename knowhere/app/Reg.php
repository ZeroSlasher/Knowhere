<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserRegController;

class Reg extends Model
{
    protected $table="tbl_user_reg";
    protected $primarykey="email";
    
    public $fillable=[
           'email',
            'name',
            'phone',
            'image',
        
    ];
}
