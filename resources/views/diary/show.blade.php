@extends('layouts.app')

@section('content')
@if (Auth::check())
<a href="{{ url('diary/' . $diary->id . '/edit') }}">Edit</a>
@endif

<section class="hero is-info is-medium is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">{{ $diary->title }}</h1>
        </div>
    </div>
</section>


<div class="container">
    <!-- START ARTICLE FEED -->
    <section class="articles">
        <div class="column is-8 is-offset-2">
            <!-- START ARTICLE -->
            <div class="card article">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content has-text-centered">
                            <p class="article-title p-b-md">
                                @foreach ($diary->tags as $tag)
                                    <span class="button is-static is-small">#{{ $tag->name }}</span>
                                @endforeach
                            </p>
                            <div class="tags has-addons level-item p-b-md">
                                <span class="tag is-rounded is-info">{{ $diary->user->name }}</span>
                                <span class="tag is-rounded has-text-dark">{{ $diary->created_at->toFormattedDateString() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="content article-body">
                        @foreach (explode("\n", $diary->content) as $line)
                        <p>{{ $line}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection