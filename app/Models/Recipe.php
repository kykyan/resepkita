<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
