<?php

namespace App\Http\Controllers;

use App\DiaryEntry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Tag;

class DiaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    public function index()
    {
        return DiaryEntry::getEntries();
        // Query builder to add extra conditions.
        // ex. past month
        // $diary = new DiaryEntry;
        // return $diary->entries()->where('id', '>', '20')->get();
    }

    public function show(DiaryEntry $diary)
    {
        return view('diary.show', compact('diary'));
    }

    public function edit(DiaryEntry $diary)
    {
        return view('diary.edit', compact('diary'));
    }

    public function update(DiaryEntry $diary)
    {
        $diary->title = Input::get('title');
        $diary->tag = Input::get('tag');
        $diary->content = Input::get('content');

        $diary->save();
        return redirect('/');
    }

    public function store(Request $request)
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
        $entry->content = Input::get('content');
        $entry->user_id = auth()->id();

        $entry->save();

        $id = DiaryEntry::latest()->first()->id;
        $tags = $request->tag;
        $this->parseTags($tags, $id);

        // return response($entry->jsonSerialize(), Response::HTTP_CREATED);
        return view('admin.postSuccess');
    }

    public function destroy(DiaryEntry $diary)
    {
        $diary->delete();
        return redirect('/');
    }

    protected function parseTags($tags, $diaryId){
        $tags = explode(",", $tags);
        foreach($tags as $tag)
        {
            $tag = trim($tag);
            Tag::firstOrCreate([
                'name' => $tag
            ]);
            $tagId = Tag::where('name', $tag)->get()->first()->id;
            DiaryEntry::find($diaryId)->tags()->attach($tagId);
        }
    }
}
