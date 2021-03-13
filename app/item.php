<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable=['item_name','item_image','item_price','item_model_number','item_size','item_type','item_short_desc','item_long_desc'];
    public function itemdetail()
    {
        return $this->belongsTo('App\items_details');
    }
}
