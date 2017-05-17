<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beers extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Users', 'Ratings')
            ->withTimestamps();
    }

    public function breweries()
    {
        return $this->belongsTo('App\Breweries');
    }
}
