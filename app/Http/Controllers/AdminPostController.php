<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function index() {
        return view('admin.index', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    public function create() {
        return view('admin/create');
    }

    public function store() {
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

        return redirect('/main/posts');
    }

    public function edit(Post $post) {
        return view('admin.edit', ['post' => $post]);
    }

    public function update(Post $post) {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'body_one' => 'required',
            'body_two' => 'required',
            'publish_on' => 'sometimes',
            'external_url' => 'sometimes'
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }
        $post->update($attributes);

        return redirect('/main/posts');
    }

    public function  destroy(Post $post) {
        if ($post->thumbnail) {
            Storage::disk('public')->delete($post->thumbnail);
        }

        // Delete the post
        $post->delete();

        return back()->with('success', 'Post Deleted');
    }
}
