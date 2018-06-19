<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public function category() {
        return $this->hasMany(Post::class);
    }
}
