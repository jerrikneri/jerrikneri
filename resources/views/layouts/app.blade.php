@include('partials.head')

@if(!Request::is('/'))
@include('partials.header')
@endif

<body class="body has-navbar-fixed-top">
    @yield('content')

@include('partials.footer')
