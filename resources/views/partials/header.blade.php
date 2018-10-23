<div class="navbar">
    <div class="links">
        <a href="/">Home</a>
        @if (Auth::check())
        <div class="is-pulled-right">
            {{ auth()->user()->name }}
            <form method="post" action="/logout">
                {{ csrf_field() }}
                <button type="submit">Logout</button>
            </form>
        </div>
        @endif
    </div>
</div>
