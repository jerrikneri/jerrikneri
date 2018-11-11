<?php

namespace App\Http\Controllers;

use App\BlogEntries;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;




class BlogController extends Controller {
    public function index()
    {
        $entries = BlogEntries::where('id', '>', '0')
          ->orderBy('id', 'desc')->get();
        return $entries;
    }

    public function edit()
    {
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'date' => 'required',
            'tag' => 'required',
            'content' => 'required'
        ]);

        BlogEntries::create([
        $entry->title = Input::get('title'),
        $entry->date = Input::get('date'),
        $entry->tag = Input::get('tag'),
        $entry->content = Input::get('content')
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