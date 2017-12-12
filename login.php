<?php

require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(isset($_POST['login'])){
		
		$login_email = $_POST['email'];
		$login_password = $_POST['pass'];
		
		
		$login_data= mysqli_query($conn, "SELECT * FROM users WHERE Email= '$login_email'") or die('Failed to login');
		
		$row= mysqli_fetch_array($login_data);
		
			if(!empty($_POST['remember'])){      // !empty means checkbox is checked. 
				
				setcookie("login_email", $login_email, time()+(60*60));
				setcookie("login_pass", $login_password, time()+(60*60));	
			}

			else
			{
				if(isset($_COOKIE['login_email'])){
					setcookie("login_email", "");
				}
			
				if(isset($_COOKIE['login_pass'])){
					setcookie("login_pass", "");
				}
				
			}
		
		if(password_verify($login_password, $row['Password'])){
			
			session_start();
			$_SESSION["user_id"] = $row['user_id'];
			$_SESSION["first_name"] = $row['First_Name'];
			$_SESSION["last_name"] = $row['Last_Name'];  
			
			header('Location: account.php');
	}
		else{
			session_start();
			$_SESSION["login_Failed"] = "Yes";
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
		
			<h3>Log In</h3>

			<form action="" method="post">
			
			<?php if(isset($_SESSION["login_Failed"])){ ?>
			
			<div><h2>Log In Failed. Please try again.</h2></div>
			
			<?php }  ?>
			
			<input type="email" name="email" autocomplete="on" placeholder="Email" required value="<?php if(isset($_COOKIE['login_email'])) { echo $_COOKIE['login_email']; } ?>">	

			<input type="password" name="pass" placeholder="Password" required value="<?php if(isset($_COOKIE['login_pass'])) { echo $_COOKIE['login_pass']; } ?>"><br>
			
			<input type="checkbox" name="remember"><label>Remember me</label><br>

			<input type="submit" value="Log In" name="login">

			</form>
		
		</div>
		
	</div>
</div>
</body>
</html>