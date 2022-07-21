<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <nav>
            <a href="{{ route('books.index')}}">Books</a>
            <a href="{{ route('books.create')}}">New Book</a>
        </nav>


       <div id="app">Vue Instance</div>

        @section('sidebar')
            This is the master sidebar.
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
