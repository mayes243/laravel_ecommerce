<?php

namespace App;
use App\tbl_order;

use Illuminate\Database\Eloquent\Model;

class tbl_payment extends Model
{
    protected $fillable=['payment_method','payment_status'];
    public function order()
    {
	 return $this->hasMany('App\tbl_payment');
	}

	public function ship()
    {
        return $this->hasMany('App\order','id');
    }
}

