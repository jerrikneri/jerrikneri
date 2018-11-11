<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogComment;
use App\BlogPost;

class BlogCommentsController extends Controller
{
    public function store(BlogPost $post)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);
        $post->addComment(request('body'));

        return back();
    }
}
