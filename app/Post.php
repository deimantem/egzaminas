<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable=['cat', 'name', 'desc', 'user_id'];



    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category() {
        return $this->belongsTo(Cat::class);
    }
}
