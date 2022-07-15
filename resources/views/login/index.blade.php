<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>

	
	<main>
		<div class="login-form">
			<form action="{{route('login-authenticate')}}" method="POST">
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
