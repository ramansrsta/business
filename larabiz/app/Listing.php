<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //creating relationships
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
