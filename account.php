
<?php require 'database.php'; ?>


<?php

session_start();

if(isset($_SESSION['user_id'])){
	
}else
{
	header('Location:login.php');
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
			<li><a href="">Profile</a></li>
			<li><a href="update.php">Update Profile</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
		
	</div>
	
	<div class="form-content">
	
		<h2>Welcome <?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"]; ?></h2>
		</div>
		
	</div>
</div>
</body>
</html>