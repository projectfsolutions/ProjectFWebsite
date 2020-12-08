<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblServices extends Model
{
    protected $table = 'tblservices';
    protected $fillable = ['FileName','Title','Description','Position','ImgPosition'];
}
