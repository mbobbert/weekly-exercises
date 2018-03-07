<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps = false;

    protected $table = 'pets';

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');// will find for user_id in pet table
    }
}
