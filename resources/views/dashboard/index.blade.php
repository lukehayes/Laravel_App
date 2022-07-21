<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

	<div class="top-bar">	
		<p>Logged in as: {{$username}}</p>
		<a href="{{route('logout')}}">Logout</a>
	</div>	
	
	<div class="content">	
		<p>Application Content</p>
	</div>	
	
    </body>
</html>
