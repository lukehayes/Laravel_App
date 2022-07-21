<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="login-page">

	
	<main>
		<div class="login-form">

			<div class="greeting">
				<h4 class="title">Hello, welcome back!</h4>
				<p>Please enter your details.</p>
			</div>

			<form action="{{route('login')}}" method="POST">
				@csrf

				@if ($errors->has('email'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif

				<div class="field">
					<label class="label">Email</label>
					<div class="control">
						<input class="input" type="text" placeholder="Email">
				  	</div>
				</div>

				@if ($errors->has('password'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif

				<div class="field">
					<label class="label">Password</label>
					<div class="control">
						<input class="input" type="password" placeholder="Password">
				  	</div>
				</div>

				<input type="submit" value="Login">
			</form>
		</div>
	</main>

    </body>
</html>
