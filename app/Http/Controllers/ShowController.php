<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ShowController extends Controller
{
    public function show()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }
}
