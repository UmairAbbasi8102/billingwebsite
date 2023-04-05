<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $members = Team::latest('created_at')->get();
        return view('admin.members', compact('members'));
    }
    public function addmember()
    {
        return view('admin.addmember');
    }
    public function store(Request $request)
    {
        // validate the data
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|max:2048',
            'about'  => 'required|max:300',
            'role' => 'required',
            'twitter_link' => ['required', 'active_url', function ($attribute, $value, $fail) {
                if (strpos($value, 'twitter.com') === false) {
                    $fail('The ' . $attribute . ' must be a valid Twitter link.');
                }
            }],
            'fb_link' => ['required', 'active_url', function ($attribute, $value, $fail) {
                if (strpos($value, 'facebook.com') === false) {
                    $fail('The ' . $attribute . ' must be a valid facebook link.');
                }
            }],
            'instagram_link' => ['required', 'active_url', function ($attribute, $value, $fail) {
                if (strpos($value, 'instagram.com') === false) {
                    $fail('The ' . $attribute . ' must be a valid instagram link.');
                }
            }],
            'linkdin_link' => ['required', 'active_url', function ($attribute, $value, $fail) {
                if (strpos($value, 'linkedin.com') === false) {
                    $fail('The ' . $attribute . ' must be a valid linkedin link.');
                }
            }],
        ]);

        // store blog image path
        $imagename = time() . '_' . $request->image->getClientOriginalName();
        $imagepath = $request->file('image')->storeAs('Images', $imagename, 'public');

        Team::create(array_merge($request->only('name', 'role', 'about', 'twitter_link', 'fb_link', 'instagram_link', 'linkdin_link'), [
            'image' => '/storage/' . $imagepath,
        ]));
        session()->flash('success', 'Member Added successfully.');

        return redirect()->route('admin.members');
    }
    public function confirmDelete(Request $request)
    {
        $user = Team::find($request->id);
        $user->delete();
        session()->flash('success', 'Member Deleted successfully.');
        return redirect()->route('admin.members');
    }
}
