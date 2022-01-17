<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function blog()
    {
        $posts = Blog::all();
        return view('blog', compact('posts'));
    }
}
