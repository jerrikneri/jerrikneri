{{-- @extends('layouts.app')

@section('content')
    <div>
        <h1>Register</h1>
        <form method="post" action="/register">
            {{ csrf_field() }}
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
            </div>
            <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
            <button type="submit">Register</button>
            @include('partials.errors')
        </form>
    </div>
@endsection --}}