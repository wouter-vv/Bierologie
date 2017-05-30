<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Roles
 * defines the different roles
 * @package App
 */
class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
