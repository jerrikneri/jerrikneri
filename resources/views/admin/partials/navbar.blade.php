@if (Auth::check())
    <div class="buttons is-pulled-right">
        {{ auth()->user()->name }}
        <form method="post" action="/logout">
            {{ csrf_field() }}
            <button class="button is-danger" type="submit">Logout</button>
        </form>
        <a href="/">
            <button class="button is-warning">Home</button>
        </a>
        <a href="/admin">
            <button class="button is-warning">Admin</button>
        </a>
    </div>
@endif