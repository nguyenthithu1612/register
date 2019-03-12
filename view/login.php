<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="public/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/validate.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Login</h1>
		<form method="POST" action="index.php?mod=login&act=checkLogin" id="loginform">
			<div class="form-group">
				<label for="mail">Email address</label>
				<input type="email" class="form-control" id="email"placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>