<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // blog index

    public function index()
    {
        $posts = Blog::latest('created_at')->get();
        return view('home.blog.blog', compact('posts'));
    }
    // blog_single
    public function single($id)
    {
        $post = Blog::find($id);
        return view('home.blog.blog_single', compact('post'));
    }
}
