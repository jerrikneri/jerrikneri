@extends('layouts.app')

@section('content')
@if (Auth::check())
<a href="{{ url('blog/' . $blog->id . '/edit') }}">Edit</a>
@endif

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
                                    <span># {{ $tag->name }}</span>
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
        </div>
    </section>

    <div>
        @foreach ($blog->comments as $comment)
            <article>
                {{ $comment->created_at->diffForHumans() }}: &nbsp;
                {{ $comment->body  }}
            </article>
        @endforeach
    </div>

    <section class="comments">
        <div class="column is-8 is-offset-2">
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
        </div>
    </section>
</div>







@endsection