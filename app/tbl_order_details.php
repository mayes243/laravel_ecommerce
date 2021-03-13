<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_order_details extends Model
{
	protected $fillable=['order_id','product_id','customer_id','product_name','product_price','product_sales_quantity'];
    public function orderdetail()
    {
    	return $this->belongsTo('App\tbl_order','order_id');
    	
    }
    public function tblc()
    {
    	return $this->belongsTo('App\tbl_customer','customer_id');
    	
    }
    public function pro()
    {
        return $this->belongsTo('App\tbl_product','product_id');
        
    }
    
}
