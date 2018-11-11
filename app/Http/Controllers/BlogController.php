<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    public function index()
    {
        return BlogPost::getPosts();
    }

    public function show(BlogPost $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function edit()
    {
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'image' => 'required',
            'tag' => 'required',
            'content' => 'required'
        ]);
        BlogPost::create([
        'title' => Input::get('title'),
        'image' => Input::get('image'),
        'tag' => Input::get('tag'),
        'content' => Input::get('content'),
        'user_id' => auth()->id()
        ]);

        // return response($entry->jsonSerialize(), Response::HTTP_CREATED);
        return view('admin.postSuccess');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
