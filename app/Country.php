<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'alias',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
