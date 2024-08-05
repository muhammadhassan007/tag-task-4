<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body', 'user_id', 'post_id',
    ];

    //comments belongs to user

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    //comments belongs to post

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
