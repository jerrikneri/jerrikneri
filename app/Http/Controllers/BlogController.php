<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use App\Tag;

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

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
        BlogPost::create([
        'title' => Input::get('title'),
        'image' => Input::get('image'),
        'content' => Input::get('content'),
        'user_id' => auth()->id()
        ]);

        $id = BlogPost::latest()->first()->id;
        $tags = $request->tag;
        $this->parseTags($tags, $id);

        // return response($entry->jsonSerialize(), Response::HTTP_CREATED);
        return view('admin.postSuccess');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    protected function parseTags($tags, $blogId){
        $tags = explode(",", $tags);
        foreach($tags as $tag)
        {
            $tag = trim($tag);
            Tag::firstOrCreate([
                'name' => $tag
            ]);
            $tagId = Tag::where('name', $tag)->get()->first()->id;
            BlogPost::find($blogId)->tags()->attach($tagId);
        }
    }
}
