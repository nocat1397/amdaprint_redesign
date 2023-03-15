<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usa extends Model
{
    protected $fillable = ['zipcode','city','state'];
}
