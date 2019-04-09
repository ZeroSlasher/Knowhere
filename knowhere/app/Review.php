<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "tbl_review";
    protected $primarykey = "rev_id";

    public $fillable = [
        'email',
        'name',
        'outlet_id',
        'review',
        'title',

    ];
}