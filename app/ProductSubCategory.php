<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    protected $fillable = ['product_id','product_index','category_id','subcategory_id'];
}
