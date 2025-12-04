<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['name', 'photo_url'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'actor_movie');
    }
}
