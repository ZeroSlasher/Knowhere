<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCat extends Model
{
    protected $table="tbl_subcat";
    protected $primarykey="subcat_id";

    public $fillable=[
        'subcatagory',
        
    ];
}
