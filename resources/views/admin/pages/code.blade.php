@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <form method="POST" action="code">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Title:</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Project Title" required>
            </div>
        </div>
        {{-- <div class="field">
            <label class="label">Tags:</label>
            <div class="control">
                <input class="input" type="text" name="tag" placeholder="Tags" required>
            </div>
        </div> --}}
        <div class="field">
            <label class="label">Content:</label>
            <div class="control">
                <textarea class="textarea" name="content" placeholder="Content"></textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
        </div>
        @include('partials.errors')
    </form>
</div>

@endsection
