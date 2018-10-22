@extends('layouts.app')

@section('content')
EDIT

<form method="post" action="{{ url('diary/edit/' . $entry->id) }}">
    {{ csrf_field() }}
    <p>Title:</p>
    <input type="text"
        id="title"
        class="form-control"
        name="title"
        value="{{ $entry->title }}">

    <p>Tag:</p>
    <input type="text"
        id="tag"
        class="form-control"
        name="tag"
        value="{{ $entry->tag }}">

    <p>Dance with words:</p>
    <textarea name="content"
        class="form-control-content"
        rows="20">{{ $entry->content }}
    </textarea>

    <button type="submit">Submit Entry</button>
</form>

<form method="post" action="{{ url('diary/delete/' . $entry->id) }}">
    {{ csrf_field() }}
    <button type="submit">DELETE POST</button>
</form>

@endsection