<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\DiaryEntry;

class CommentsController extends Controller
{
    public function store(DiaryEntry $entry)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);
        $entry->addComment(request('body'));

        return back();
    }
}
