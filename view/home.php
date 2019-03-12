<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/home.css">
</head>
<body>
    <p>Hello <?php echo $name ?></p>
    <p>You have logged in our website at <?php echo date("l jS \of F Y h:i:s A"); ?></p>
    <br>
    <a href="index.php?mod=login&act=logout">Logout</a>
</body>
</html>