<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['page','title','descp','extraTxt','section1','section2','photo','extimg','extimg2','link','part','type'];
    //protected $fillable = ['type','photo','link'];
    public $timestamps = false;
}
