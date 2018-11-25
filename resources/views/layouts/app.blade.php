@include('partials.head')

@if(!Request::is('/'))
@include('partials.header')
@endif

@if(Request::is('blog/*'))
<body class="body">
@else
    <body class="body has-navbar-fixed-top">
@endif
    @yield('content')


@include('partials.footer')
