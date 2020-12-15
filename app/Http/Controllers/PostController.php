<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{


    public function showPosts()
    {
        $posts = Post::with('tags', 'categories','image', 'author')->get();

        return view('post.list')->withPosts($posts);
    }


}
