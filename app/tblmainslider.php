<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblmainslider extends Model
{
    protected $table = 'tblmainslider';
    protected $fillable = ['FileName','Description','Position'];
}
