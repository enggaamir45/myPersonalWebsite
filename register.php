<?php

require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(isset($_POST['register'])){
		
		$fname= $_POST['first_name'];
		$lname= $_POST['last_name'];
		$email = $_POST['email'];
	/*	$password= md5($_POST['pass']); */
		
		$password = $_POST['pass']; // md5 encription is not one of the most secure encryption. We will use password hasing for more secure login system.
		
		$hashed_password = password_hash($password, PASSWORD_BCRYPT, array('cost'=> 10));
		
		$user_exist= mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");
		$condition = mysqli_fetch_array($user_exist);
		

		if($condition['Email'] != $email){
		
		session_start();
		$_SESSION['register_success']= "yes";
		mysqli_query($conn, "INSERT INTO users (First_Name, Last_Name, Email, Password) VALUES ('$fname', '$lname', '$email', '$hashed_password')") or die('unable to query data');
		header('Location: confirm.php');
		}
		else{
			
			session_start();
			$_SESSION['user_exist']= "Yes";
		} 
		
	}
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
	
		<div class="form">
		
			<h3>Create an Account</h3>

			<form action="" method="post">
			
			<?php if(isset($_SESSION['user_exist'])) { ?>
			
			<div><p>This Email is already registered. Please try again with another Email.</p></div>
			
			<?php } ?>

			<input type="text" name="first_name" autocomplete="on" placeholder="First Name" required>

			<input type="text" name="last_name" autocomplete="on" placeholder="Last Name" required>

			<input type="email" name="email" autocomplete="on" placeholder="Email" required>	

			<input type="password" name="pass" placeholder="Password" required><br>

			<input type="submit" value="Register" name="register">

			</form>
		
		</div>
		
	</div>
</div>
</body>
</html>