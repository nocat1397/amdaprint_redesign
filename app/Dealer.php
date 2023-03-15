<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $fillable = [
        'email',
        'passsword',
        'company_name',
        'company_phone',
        'position',
        'website',
        'mobile',
        'fname',
        'lname',
        'address',
        'zip',
        'city',
        'state',
        'country',
        'reseller',
        'industry_type',
        'find_us',
        'tax_id',
        'certificate',
        'license',
        'status'
    ];
}
