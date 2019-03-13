<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table="tbl_cat";
    protected $primarykey="Cat_id";

    public $fillable=[
        'catagory',
        
    ];
}
