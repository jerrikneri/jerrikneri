@extends('layouts.app')

@section('content')
@if (Auth::check())
<a href="{{ url('blog/' . $blog->id . '/edit') }}">
    <button class="button is-primary">
        Edit
    </button>
</a>
@endif
{{-- @include('admin.partials.navbar') --}}

<section class="hero is-info is-medium is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">{{ $blog->title }}</h1>
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
                                @foreach ($blog->tags as $tag)
                                    <span class="button is-static is-small">#{{ $tag->name }}</span>
                                @endforeach
                            </p>
                            <div class="tags has-addons level-item p-b-md">
                                <span class="tag is-rounded is-info">{{ $blog->user->name }}</span>
                                <span class="tag is-rounded">{{ $blog->created_at->toFormattedDateString() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="content article-body">
                        @foreach (explode("\n", $blog->content) as $line)
                        <p>{{ $line}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="p-t-lg">
                <p class="subtitle">Comments</p>
                @foreach ($blog->comments as $comment)
                <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                                {{ $comment->created_at->diffForHumans() }}: &nbsp;
                                {{ $comment->body  }}
                        </div>
                    </div>
                    @if (Auth::check())
                    <form action="comment/{{$comment->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="button is-light" type="submit">Delete</button>
                    </form>
                    @endif
                    </figure>
                </article>
                @endforeach
            </div>
            <div class="p-t-lg">
                <form method="post" action="/blog/{{ $blog->id }}/comments">
                    {{ csrf_field() }}
                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="field">
                                <p class="control">
                                    <textarea name="body" class="textarea" placeholder="Add a comment..."></textarea>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <button type="submit" class="button">Post comment</button>
                                </p>
                            </div>
                        </div>
                    </article>
                @include('partials.errors')
                </form>
            </div>
        </div>
    </section>
</div>







@endsection