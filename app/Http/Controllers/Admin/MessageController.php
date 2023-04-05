<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = messages::latest('created_at')->get();
        return view('admin.messages', compact('messages'));
    }
}
