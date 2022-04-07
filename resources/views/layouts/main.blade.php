<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>

        <nav>
            <a href="{{ route('books.index')}}">Books</a>
            <a href="{{ route('books.create')}}">New Book</a>
        </nav>

        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
