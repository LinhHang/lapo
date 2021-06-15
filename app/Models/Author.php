<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function level() {
        return $this->hasOne(Level::class);
    }

    public function types() {
        return $this->hasMany(Type::class);
    }
}
