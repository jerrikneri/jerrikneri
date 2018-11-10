@extends('layouts.app')

@section('content')
@if (Auth::check())
<a href="{{ url('diary/' . $diary->id . '/edit') }}">Edit</a>
@endif

<div class="has-text-black">
    {{ $diary->title }}
    {{ $diary->user->name }} on {{ $diary->created_at->toFormattedDateString() }}
    {{ $diary->tag }}
</div>

{{ $diary->content }}

<div>
    @foreach ($diary->comments as $comment)
        <article>
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
            {{ $comment->body  }}
        </article>
    @endforeach
</div>



<form method="post" action="/diary/{{ $diary->id }}/comments">
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