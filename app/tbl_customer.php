<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
    protected $fillable=['first_name','middle_name','last_name','email','gender','phone','address'];
    public function customer()
    {
    	return $this->hasMany('App\tbl_order','id');
    	return $this->ManyToMany('App\tbl_order_details','id');
    }

}

