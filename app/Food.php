<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Comment;
class Food extends Model
{
    public function foodtype()
    {
        return $this->belongsTo(FoodType::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
