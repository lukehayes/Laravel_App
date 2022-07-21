<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="login-page">

	
	<main>
		<div class="login-form">

			<h4 class="title">Login</h4>

			<form action="{{route('login')}}" method="POST">
				@csrf

				@if ($errors->has('email'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif

				<input type="text" placeholder="Email" name="email">


				@if ($errors->has('password'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif

				<input type="password" placeholder="Password" name="password">
				<input type="submit" value="login">
			</form>
		</div>
	</main>

    </body>
</html>
