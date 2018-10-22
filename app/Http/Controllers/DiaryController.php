<?php

namespace App\Http\Controllers;

use App\DiaryEntry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;




class DiaryController extends Controller
{
    public function getEntries()
    {
        return DiaryEntry::getEntries();
        // Query builder to add extra conditions.
        // ex. past month
        // $diary = new DiaryEntry;
        // return $diary->entries()->where('id', '>', '20')->get();
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

        $entry = new DiaryEntry();
        $entry->title = Input::get('title');
        $entry->date = Input::get('date');
        $entry->tag = Input::get('tag');
        $entry->content = Input::get('content');

        $entry->save();

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