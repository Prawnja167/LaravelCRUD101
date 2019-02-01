<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activist extends Model
{
    protected $fillable = ['id','activist_name','activist_nim'];
}
