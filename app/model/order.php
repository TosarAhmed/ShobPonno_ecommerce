<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $fillable = ['user_id', 'ip_address', 'name', 'phone_no', 'shipping_Address', 'email', 'message', 'is_paid', 'is_completed', 'is_seen_by_admin'];


    public function user()
    {
    	return $this->belongsTo(App/User::class);
	
	}

	public function carts()
    {
    	return $this->belongsTo(App/Model/Cart::class);
	
	}


}
