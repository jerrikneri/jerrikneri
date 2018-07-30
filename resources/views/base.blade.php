<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>A Blog Code Diary</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{!! URL::asset('css/style.css') !!}" rel="stylesheet" type="text/css">
        

    </head>
    @if(!Request::is('/'))
    @include('header')
    @endif
    
    <body>
      <!-- <router-view></router-view> -->
      @yield('homeContent', '')

      @yield('aboutContent', '')
      @yield('blogContent', '')
      @yield('codeContent', '')
      @yield('diaryContent', '')
      @yield('epitomeContent', '')

      <div id="app">
        <Home></Home>
      </div>
        
    </body>

    @include('footer')
</html>
