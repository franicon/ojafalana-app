<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {

        return view('blog', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }

    public function show(Post $post)
    {
        $posts = Post::latest();

        return view('blog-details', [
            'post' => $post,
            'posts' => $posts->get()
        ]);
    }
}
