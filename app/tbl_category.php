<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_category extends Model
{
    protected $fillable=['category_name','category_description','publication_status','created_by','modified_by'];
    public function category()
    {
    	return $this->ManyToMany('App\tbl_manufacture','id');
    }
}
