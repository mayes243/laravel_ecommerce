<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_shipping extends Model
{
    protected $fillable=['first_name','middle_name','last_name','address','email','telephone'];

    public function order()
    {
    	return $this->ManyToMany('App\tbl_order','id');
    }
}
