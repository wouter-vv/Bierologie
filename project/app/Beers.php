<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beers extends Model
{
    protected $table = 'beers';
    protected $fillable = ['name', 'description', 'pivot.comment', 'pivot.score'];

    public function users()
    {
        return $this->belongsToMany('App\Users', 'Ratings', 'beer_id', 'test_id')
            ->withTimestamps()->withPivot('id', 'score', 'comment');
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