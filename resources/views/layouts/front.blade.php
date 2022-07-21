<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body class="front-page">
		@yield('hero')
		@yield('content')
    </body>

</html>
