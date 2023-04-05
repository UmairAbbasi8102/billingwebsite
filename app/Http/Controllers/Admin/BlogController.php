<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function posts()
    {
        $posts = Blog::latest('created_at')->get();
        return view('admin.allposts', compact('posts'));
    }
    public function addposts()
    {
        return view('admin.addpost');
    }
    public function store(Request $request)
    {
        // validate the data
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:2048',
            'desc'  => 'required|min:90|max:300',
            'det_desc' => 'required|max:2048',
        ]);

        // store blog image path
        $imagename = time() . '_' . $request->image->getClientOriginalName();
        $imagepath = $request->file('image')->storeAs('Images', $imagename, 'public');

        Blog::create(array_merge($request->only('title','desc', 'det_desc'), [
            'image' => '/storage/' . $imagepath,
        ]));
        session()->flash('success', 'Blog Added successfully.');

        return redirect()->route('admin.posts');
    }
}
