<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vmail extends Model
{
    protected $table="tbl_verify_mail";
    protected $primarykey="eid";

    public $fillable=[
        'email',
        'code',
        
    ];
}