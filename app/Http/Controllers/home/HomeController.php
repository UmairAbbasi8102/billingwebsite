<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\messages;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Blog::inRandomOrder()->take(6)->get();
        $teams = Team::all();
        return view('home.index',compact('posts', 'teams'));
    }
    // submit contact form
    public function submit(Request $request) {
        //  Validate form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        messages::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Return a response
        return response()->json([
            'success' => true,
            'message' => 'Thanks we will contact you as soon as possible :)!'
        ]);
    }
}
