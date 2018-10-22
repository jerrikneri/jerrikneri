@extends('layouts.app')

@section('content')

Diary Entry {{ $entry->id }}
{{ $entry->title }}
{{ $entry->tag }}
{{ $entry->content }}

<a href="{{ url('diary/edit/' . $entry->id) }}">Edit</a>


@endsection