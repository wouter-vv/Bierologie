<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beers
 * contains data of all the beers
 * @package App
 */
class Beers extends Model
{
    protected $table = 'beers';
    protected $fillable = ['name', 'description'];

    public function users()
    {
        return $this->belongsToMany('App\Users', 'Ratings', 'beer_id', 'test_id')
            ->withTimestamps()
            ->withPivot('id', 'score', 'comment');
    }

    public function brewery()
    {
        return $this->belongsTo(Breweries::class);
    }

    public function rating()
    {
        return $this->hasMany(Ratings::class, 'beer_id');
    }
}
