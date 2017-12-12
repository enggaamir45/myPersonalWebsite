
<?php require 'database.php'; ?>

<?php

session_start();

unset($_SESSION['user_id']);

session_destroy();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="master.css">
</head>

<body>
<div class="container">
	
	<div class="header">
		<h1>COMPANY LOGO</h1>
		
	</div>
	
	<div class="main-menu">
		<ul>
			<li><a href="register.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
		
	</div>
	
	<div class="form-content">
	
		<h2>You are Logged out of your account.</h2>
		
	</div>
</div>
</body>
</html>