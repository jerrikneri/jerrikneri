<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Http\Requests\BlogPostStoreRequest;
use App\Tag;
use Illuminate\Support\Collection;

class BlogController extends Controller
{
    protected $blogPost;
    protected $tag;

    public function __construct(BlogPost $blogPost, Tag $tag)
    {
        $this->blogPost = $blogPost;
        $this->tag = $tag;
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    public function index(): Collection
    {
        return $this->blogPost->getPosts();
    }

    public function show(BlogPost $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function edit()
    {
    }

    public function store(BlogPostStoreRequest $request)
    {
        $blogPost = $this->blogPost->create(
            array_merge(
                $request->validated(),
                ['user_id' => auth()->id()]
            )
        );

        $this->parseTags($request->tag, $blogPost->id);

        return view('admin.postSuccess');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    protected function parseTags($tags, $blogId)
    {
        $tags = explode(',', $tags);
        foreach ($tags as $tag) {
            $tag = trim($tag);
            $this->tag->firstOrCreate([
                'name' => $tag
            ]);
            $tagId = $this->tag->whereName($tag)->get()->first()->id;
            $this->blogPost->find($blogId)->tags()->attach($tagId);
        }
    }
}
