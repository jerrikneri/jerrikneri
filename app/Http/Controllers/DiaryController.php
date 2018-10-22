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

    public function show(DiaryEntry $entry)
    {
        return view('diary.show', compact('entry'));
    }

    public function edit(DiaryEntry $entry)
    {
        return view('diary.edit', compact('entry'));
    }

    public function update(DiaryEntry $entry)
    {
        $entry->title = Input::get('title');
        $entry->tag = Input::get('tag');
        $entry->content = Input::get('content');

        $entry->save();
        return redirect('/');
    }

    public function postEntry()
    {
        $input = Input::only('title', 'tag', 'content');
        $rules = [
            'title' => 'required',
            'tag' => 'required',
            'content' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Response::json($validator->failed(), 422);
        }

        $entry = new DiaryEntry();
        $entry->title = Input::get('title');
        $entry->tag = Input::get('tag');
        $entry->content = Input::get('content');

        $entry->save();

        // return response($entry->jsonSerialize(), Response::HTTP_CREATED);
        return view('admin.postSuccess');
    }

    public function delete(DiaryEntry $entry)
    {
        $entry->delete();
        return redirect('/');
    }
}
