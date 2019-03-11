<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public static function orderBy($field) {
        return Post::orderBy($field, 'desc');
    }
    
    public static function withUsername() {
        return Post::join('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.*', 'users.name as username');
    }

    public static function getById($id) {
        return Post::where('id', $id);
    }

    public static function getByIdWithUsername($id) {
        return Post::getById($id)
            ->withUsername();
    }
    
    public static function allWithUsername() {
        return Post::withUsername()->orderBy('created_at', 'desc')->get();
    }
}
