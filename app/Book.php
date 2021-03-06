<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
