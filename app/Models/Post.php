<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Inverse One to Many
    public function user() {
        return $this->belongsTo(User::class);
    }

    // One to Many: Post -> Comments
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // Many to Many inverse: Post -> Likers
    public function likers() {
        return $this->belongsToMany(User::class, 'post_user_likes')->withTimestamps();
    }

    protected $fillable = [
        'user_id',
        'title',
        'body',];
}