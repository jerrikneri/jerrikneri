@extends('admin.layouts.admin')

@section('content')
    <a href="/admin/blog">Create blog entry</a>
    <a href="/admin/code">Create project entry</a>
    <a href="/admin/diary">Create diary entry</a>
    {{-- @include('admin.createEntry') --}}
@endsection()

@include('partials.footer')

