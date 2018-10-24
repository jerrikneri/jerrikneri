@extends('layouts.app')

@section('content')
    <div>
        <h1>Log In</h1>
        <form method="post" action="/login">
            {{ csrf_field() }}
            <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
            </div>
            <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            @include('partials.errors')
        </form>
    </div>
@endsection