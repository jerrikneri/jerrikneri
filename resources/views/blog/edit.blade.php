@extends('layouts.app')

@section('content')
EDIT

<form method="post" action="{{ url('blog/edit/' . $blog->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <p>Title:</p>
    <input type="text"
        id="title"
        class="form-control"
        name="title"
        value="{{ $blog->title }}"
        required>

    <p>Tag:</p>
    <input type="text"
        id="tag"
        class="form-control"
        name="tag"
        value="{{ $blog->tag }}"
        required>

    <p>Dance with words:</p>
    <textarea name="content"
        class="form-control-content"
        rows="20"
        required>{{ $blog->content }}
    </textarea>

    <button type="submit">Submit Entry</button>
</form>

<form method="post" action="{{ url('blog/' . $blog->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">DELETE POST</button>
</form>

@endsection