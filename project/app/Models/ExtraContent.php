<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraContent extends Model
{
    protected $fillable = ['type','photo','title','descp','extraTxt','link'];
    public $timestamps = false;
}
