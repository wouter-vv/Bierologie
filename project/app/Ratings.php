<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $table = 'ratings';
    protected $fillable = [ 'score', 'comment' ];

    public function beer() {
        return $this->belongsTo(Beer::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}