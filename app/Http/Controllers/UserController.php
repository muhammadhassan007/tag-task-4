<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['posts.comments'])->get();
        return view('users.index', compact('users'));
    }

    public function showUserPosts($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts()->with('comments')->get();
        return view('users.posts', compact('user', 'posts'));
    }
}
