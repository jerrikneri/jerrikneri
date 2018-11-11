@extends('layouts.app')

@section('content')
@if (Auth::check())
<a href="{{ url('blog/' . $blog->id . '/edit') }}">Edit</a>
@endif

<div class="has-text-black">
    {{ $blog->title }}
    {{ $blog->user->name }} on {{ $blog->created_at->toFormattedDateString() }}
    {{ $blog->tag }}
</div>

{{ $blog->content }}

<div>
    @foreach ($blog->comments as $comment)
        <article>
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
            {{ $comment->body  }}
        </article>
    @endforeach
</div>



<form method="post" action="/blog/{{ $blog->id }}/comments">
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