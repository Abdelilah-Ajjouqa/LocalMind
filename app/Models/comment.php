<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'content'
    ];

    public static function getAllComment($post_id){
        return Comment::where('post_id', $post_id)->get();
    }

    // Define relationship with Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
