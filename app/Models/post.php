<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'location'
    ];

    public static function getAllPosts(){
        return Post::all();
    }

    public static function getPostById($id){
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }
        return $post;
    }

    public static function getPostByTitle($title){
        $post = Post::where('title', $title)->first();

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return $post;
    }

    public static function createPost($title, $content, $location){
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->location = $location;
        $post->save();
        return $post;
    }

    public function comments(){
        return $this->hasMany(Comment::class);
        // return $this->get_class_methods(Comment::class);
    }
}
