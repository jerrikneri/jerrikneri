<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogComment;
use App\BlogPost;

class BlogCommentsController extends Controller
{
    public function store(BlogPost $blog)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);

        $blog->addComment(request('body'));

        return back();
    }

    public function destroy(BlogComment $comment)
    {
        $comment->delete();
        return back();

    }
}
