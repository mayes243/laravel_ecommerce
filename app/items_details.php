<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items_details extends Model
{
    protected $fillable=['item_id','item_image'];
    public function item()
    {
    	return $this->belongsTo('App\item');
    }
}
