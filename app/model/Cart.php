<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $fillable = ['user_id', 'ip_address', 'product_id', 'order_id', 'product_qty'];


    public function user()
    {
    	return $this->belongsTo(App/User::class);

    }
        
        public function product()
    {
    	return $this->belongsTo(App/Product::class);

    }

        public function order()
    {
    	return $this->belongsTo(App/Model/order::class);

  
    }
}
