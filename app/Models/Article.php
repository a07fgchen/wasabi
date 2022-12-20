<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function authors()
    {
        return $this->belongsToMany(User::class, 'article_user', 'id', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id', 'article_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
