<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $dates = [
        'event_date',
    ];

    public function interested(){
        return $this->hasMany('App\Interested');
    }
}
