<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(\App\Models\Post $post)
    {
        return view('post/index', compact('post'));
    }
}
