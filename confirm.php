<?php require 'database.php'; ?>

<?php

session_start();

if(isset($_SESSION['register_success'])){
	
}
else
{
	header('Location:register.php');
}

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
		
			<h2> Thank You for registering. Now, click on the below Log In button to continue. </h2>
			
			<a href="login.php" target="_self">Log In</a>
		
		</div>
		
	</div>
</div>
</body>
</html>