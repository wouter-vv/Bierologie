<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breweries extends Model
{
    public function beers()
    {
        return $this->hasMany('App\Beers');
    }
}
