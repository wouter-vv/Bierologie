<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breweries extends Model
{
    protected $table = 'breweries';
    protected $fillable = ['name', 'foundingyear' ];
    public function beers()
    {
        return $this->hasMany('App\Beers', 'brewery_id');
    }
}
