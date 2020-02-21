<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts');
    }

    public function post(Post $post)
    {
        return view('post');
    }
}