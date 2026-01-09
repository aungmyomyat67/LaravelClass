<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // One to Many: User -> Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Many to Many: User -> Liked Posts
    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'post_user_likes')->withTimestamps();
    }

    // Has One Through: Latest Comment through Post
    public function latestCommentThroughPost()
    {
        return $this->hasOneThrough(
            Comment::class,
            Post::class,
            'user_id',
            'post_id',
            'id',
            'id'
        )->latestOfMany();
    }

    // Has Many Through: All Comments through Posts
    public function commentsThroughPosts()
    {
        return $this->hasManyThrough(
            Comment::class,
            Post::class,
            'user_id',
            'post_id',
            'id',
            'id'
        );
    }
}
