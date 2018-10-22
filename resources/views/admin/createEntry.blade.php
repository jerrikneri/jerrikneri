
@section('content')
<form method="POST" action="diary/post" class="content">
    {{ csrf_field() }}
    <p>Title:</p>
    <input type="text"
        id="title"
        class="form-control"
        name="title"
        placeholder="Post Title">
    <p>Date:</p>
    <input type="text"
        id="date"
        class="form-control"
        name="date"
        placeholder="Date">
    <p>Tag:</p>
    <input type="text"
        id="tag"
        class="form-control"
        name="tag"
        placeholder="Tag">

    <p>Dance with words:</p>
    <textarea name="content"
        class="form-control-content"
        rows="20"></textarea>
    <button type="submit"
        class="">Submit Entry</button>
</form>
@endsection
