<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblabout extends Model
{
    protected $table = 'tblabouts';
    protected $fillable = ['About','Vision','Mission'];
}
