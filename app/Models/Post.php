<?php

namespace App;

use App\Models\PostType;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function types() {
        return $this->belongsToMany(Type::class)->using(PostType::class);
    }

    public function postTypes() {
        return $this->hasMany(PostType::class);
    }

    public function postSubTypes() {
        return $this->belongsToMany(SubType::class);
    }

    public function images() {
        return $this->hasMany(PostImage::class);
    }
}
