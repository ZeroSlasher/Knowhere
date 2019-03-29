<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = "tbl_prof_images";
    protected $primarykey = "imgid";

    public $fillable = [
        'imgname',
        'outletid',
    ];
}