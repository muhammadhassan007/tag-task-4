<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'user_id', 'post_id',
    ];

    //posts belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
