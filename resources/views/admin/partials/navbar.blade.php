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
@else
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
            <a class="navbar-item" href="/">
                Home
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                More
                </a>

                <div class="navbar-dropdown">
                <a class="navbar-item" href="/blog">
                    Blog
                </a>
                <a class="navbar-item" href="/code">
                    Code
                </a>
                <a class="navbar-item" href="/diary">
                    Diary
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="/view/resume.pdf">
                    Resume
                </a>
                </div>
            </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                    <a class="button is-link">
                        <strong>Subscribe</strong>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endif
