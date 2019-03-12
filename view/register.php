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
    	<h1 class="text-center">Register</h1>
    	<form method="POST" action="?mod=signup&act=storeRegister" id="reForm">
                <div class="form-group">
    			<label for="nameForm">Name</label>
    			<input type="text" class="form-control" id="name" name="name" placeholder="Input your name">
    			<span></span>
    		</div>
    		<div class="form-group">
    			<label for="emaiForm">Email address</label>
    			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    		</div>
    		<div class="form-group">
    			<label for="exampleInputPassword1">Password</label>
    			<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
    		</div>
    		<div class="form-group">
    			<label for="exampleInputPassword1">Confirm Password</label>
    			<input type="password" class="form-control" id="cfpwd" name="cfpwd" placeholder="Confirm Password">
    		</div>
    		
    		<button type="submit" class="btn btn-primary">Sign up</button>    
            <a class="btn btn-success" href="index.php?mod=login&act=showFormLogin">Sign in, click here</a>
    	</form>
    </div>
</body>
</html>
