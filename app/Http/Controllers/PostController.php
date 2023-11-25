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

    public function create()
    {
        return view('admin/create');

    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'body_one' => 'required',
            'body_two' => 'required',
            'publish_on' => 'sometimes',
            'external_url' => 'sometimes'


        ]);

        $titleWords = implode(' ', array_slice(explode(' ', $attributes['title']), 0, 4));
        $attributes['slug'] = Str::slug($titleWords, '_');
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

        // Ensure the slug is unique
        $originalSlug = $attributes['slug'];
        $count = 1;
        while (Post::where('slug', $attributes['slug'])->exists()) {
            $attributes['slug'] = $originalSlug . '_' . $count;
            $count++;
        }

        Post::create($attributes);

        return redirect('/press-releases');
    }
}
