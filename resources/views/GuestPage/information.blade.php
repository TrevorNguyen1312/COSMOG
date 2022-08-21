<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Edit Information</title>
    <link rel="icon" href="img/logowhite.png" />
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="css/loginstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="register" action="{{url('register-guest')}}" method="post">
				@if(Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
				@endif
				@if(Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
				@endif
				@csrf
                <div class="login__field">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="login__icon bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>					
				<input type="text" class="login__input form-control" name="name" placeholder="Name" value="{{old('name')}}">
				<br>
				<span class="text-danger">@error('name') {{$message}} @enderror </span>
				</div>
                <div class="login__field">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="login__icon bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
				<input type="text" name="contact" class="login__input" placeholder="Contact" value="{{old('contact')}}">
				<br>
				<span class="text-danger">@error('contact') {{$message}} @enderror </span>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="username" class="login__input" placeholder="Username" value="{{old('username')}}">
					<br>
					<span class="text-danger">@error('username') {{$message}} @enderror </span>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" class="login__input" placeholder="Password" value="{{old('password')}}">
					<br>
					<span class="text-danger">@error('password') {{$message}} @enderror </span>
				</div>
				<button class="button login__submit">
					<span class="button__text">Edit information</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
