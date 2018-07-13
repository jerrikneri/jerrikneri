<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A Blog Code Diary</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{!! URL::asset('css/style.css') !!}" rel="stylesheet" type="text/css">
        

    </head>
    @include('header')
    <body>
      
      @yield('homeContent', '')

      @yield('aboutContent', '')
      @yield('blogContent', '')
      @yield('codeContent', '')
      @yield('diaryContent', '')
      @yield('epitomeContent', '')

        
    </body>

    @include('footer')
</html>
