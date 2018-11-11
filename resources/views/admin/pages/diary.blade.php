@extends('admin.layouts.admin')

@section('content')
<form method="POST" action="diary" class="content">
    {{ csrf_field() }}
    <p>Title:</p>
    <input type="text"
        id="title"
        class="form-control"
        name="title"
        placeholder="Post Title" required>
    <p>Tag:</p>
    <input type="text"
        id="tag"
        class="form-control"
        name="tag"
        placeholder="Tag" required>

    <p>Dance with words:</p>
    <textarea name="content"
        class="form-control-content"
        rows="20" required></textarea>
    <button type="submit"
        class="">Submit Entry</button>
</form>
@endsection
