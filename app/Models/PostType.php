<?php

namespace App\Models;

use App\Post;
use App\Type;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $table = 'post_types';
    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
