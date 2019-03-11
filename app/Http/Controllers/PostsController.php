<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Message;

class PostsController extends Controller
{

    public function index() {
        $posts = Post::allWithUsername();
        return view('index', compact('posts'));
    }

    public function post($id) {
        $post = Post::getById($id)->first();
        $user = User::getById($post->user_id)->first();
        $messages = Message::withUsername()->where('post_id', $id)->get();
        return view('post', compact('post', 'user', 'messages'));
    }
}
