<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $fillable = ['brand_name', 'brand_desc', 'brand_image', 'status'];


    public function products()
    {
    	return $this->hasMany(Category::class);
    }
    
}
