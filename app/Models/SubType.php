<?php

namespace App;

use App\Models\PostType;
use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    protected $table = 'sub_types';

    public function types() {
        return $this->belongsToMany(Type::class);
    }

    public function postTypes() {
        return $this->hasMany(PostType::class);
    }
}
