<div class="navbar">
    <div class="links">
        @if (Auth::check())
        {{-- <a href="/">Home</a> --}}
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
