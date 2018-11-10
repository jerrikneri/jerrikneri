<div class="navbar flex-center">
    <div class="links">
    ADMIN
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
