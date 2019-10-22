<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];

    public static function published()
    {
        return self::where('is_published', true)->get();

    
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);


    }
}
