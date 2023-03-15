<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'header', 'footer'
    ];

    protected $casts = [
         'header' => 'array'
    ];
}
