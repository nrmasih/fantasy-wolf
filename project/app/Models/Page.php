<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'details','photo','meta_tag','meta_description'];
    public $timestamps = false;
}
