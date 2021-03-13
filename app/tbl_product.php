<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model
{
    protected $fillable=['category_id','manufacture_id','product_name','product_price','product_image','product_short_description','product_long_description','product_size','product_color','publication_status','product_quantity'];
    public function product()
    {
    	return $this->belongsTo('App\tbl_category','category_id');
    	
    }
    public function manu()
    {
	return $this->belongsTo('App\tbl_manufacture','manufacture_id');    	
    }

    public function menu()
    {
	return $this->hasMany('App\tbl_order_details','id');    	
    }
}
