@extends('layouts.app')

@section('content')
<div class="has-text-black">
    {{ $entry->title }}
    {{ $entry->created_at->toFormattedDateString() }}
    {{ $entry->tag }}
</div>

{{ $entry->content }}

<div>
    @foreach ($entry->comments as $comment)
        <article>
            {{ $comment->created_at->diffForHumans() }}
            {{ $comment->body  }}
        </article>
    @endforeach
</div>

<a href="{{ url('diary/edit/' . $entry->id) }}">Edit</a>


@endsection