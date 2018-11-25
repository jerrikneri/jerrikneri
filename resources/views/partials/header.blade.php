<div class="navbar">
    <div class="links">
        @if (Auth::check())
            @include('admin.partials.navbar')
        @endif
    </div>
</div>
