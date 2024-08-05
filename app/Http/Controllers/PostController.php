<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    // i'm normally use custom Validation located in Request folder but for some work load i don't have much time

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = new Post;
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->body = $request->body;

        if ($post->save())
            return redirect()->route('posts.create')->with('success', 'Post created successfully!');
        return redirect()->back()->with('error', 'Failed to create Post!');
    }   
}
