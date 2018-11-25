@extends('admin.layouts.admin')

@section('content')
    <div class="container box buttons p-t-md p-b-md">
        <a href="/admin/blog">
            <button class="button is-primary m-l-md m-r-md">
                Create blog entry
            </button>
        </a>
        <a href="/admin/code">
            <button class="button is-link m-l-md m-r-md">
                Create project entry
            </button>
        </a>
        <a href="/admin/diary">
            <button class="button is-info m-l-md m-r-md">
                Create diary entry
            </button>
        </a>

    </div>
    {{-- @include('admin.createEntry') --}}
@endsection()

@include('partials.footer')

