@extends('layouts.app')

@section('content')
<!-- if user()->auth() -->
<a href="{{ url('diary/edit/' . $entry->id) }}">Edit</a>

<div class="has-text-black">
    {{ $entry->title }}
    {{ $entry->created_at->toFormattedDateString() }}
    {{ $entry->tag }}
</div>

{{ $entry->content }}

<div>
    @foreach ($entry->comments as $comment)
        <article>
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
            {{ $comment->body  }}
        </article>
    @endforeach
</div>



<form method="post" action="/diary/{{ $entry->id }}/comments">
    {{ csrf_field() }}
    <div>
        <textarea name="body"
        cols="30" rows="5"
        placeholder="Leave a comment."
        required>
        </textarea>
    </div>
    <div>
        <button type="submit">Add Comment</button>
    </div>
    @include('partials.errors')
</form>

@endsection