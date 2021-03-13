<?php

namespace App;
use App\tbl_payment;

use Illuminate\Database\Eloquent\Model;

class tbl_order extends Model
{
    protected $fillable=['order_total','order_status','payment_id','shipping_id','customer_id'];
    public function order()
    {
    	return $this->hasMany('App\tbl_order_details','id');
    }
    public function cus()
    {
    	return $this->belongsTo('App\tbl_customer','customer_id');
    	
    }

    public function ship()
    {
        return $this->belongsTo('App\tbl_shipping','shipping_id');
    }
    public function pay()
    {
        return $this->belongsTo('App\tbl_payment','payment_id');
    }
}

