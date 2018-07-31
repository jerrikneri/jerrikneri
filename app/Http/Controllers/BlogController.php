<?php

namespace App\Http\Controllers;

use App\BlogEntries;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;




{
    public function getEntries()
    {
        $entries = BlogEntries::where('id', '>', '0')
          ->orderBy('id', 'desc')->get();
        return $entries;
    }

    public function edit()
    {
    }

    public function postEntry()
    {
        $input = Input::only('title', 'date', 'tag', 'content');
        $rules = [
            'title' => 'required',
            'date' => 'required',
            'tag' => 'required',
            'content' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Response::json($validator->failed(), 422);
        }

        $entry = new BlogEntries();
        $entry->title = Input::get('title');
        $entry->date = Input::get('date');
        $entry->tag = Input::get('tag');
        $entry->content = Input::get('content');

        // $entry->save();

        return response($entry->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}