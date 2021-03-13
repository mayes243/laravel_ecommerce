<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_manufacture extends Model
{
    protected $fillable=['manufacture_name','manufacture_description','publication_status','category_id'];
    public function category()
    {
    	return $this->belongsTo('App\tbl_category');
    	return $this->ManyTOMany('App\tbl_category','id');
    }
}
