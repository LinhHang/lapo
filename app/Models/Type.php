<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public function posts() {
        $this->hasMany(Post::class);
    }

    public function subTypes() {
        $this->hasMany(SubType::class);
    }
}
