<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable=['first_name','last_name','email','subject','messages','time'];
}


