<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiaryCommentComment;
use App\DiaryEntry;

class DiaryCommentsController extends Controller
{
    public function store(DiaryEntry $diary)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);
        $diary->addComment(request('body'));

        return back();
    }
}
