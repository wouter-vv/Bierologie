<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * contains the users
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function beers()
    {
        return $this->belongsToMany('App\Beers', 'Ratings', 'user_id', 'beer_id')
            ->withTimestamps()->withPivot('id', 'score', 'comment');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function rating()
    {
        return $this->hasMany(Ratings::class, 'user_id');
    }
}
