
<?php require 'database.php'; ?>


<?php

session_start();

if(isset($_SESSION['user_id'])){
	
}else
{
	header('Location:login.php');
}

?>

<?php

$user_id = $_SESSION['user_id'];

$result= mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$user_id'");

$row = mysqli_fetch_array($result);

$_SESSION["first_name"] = $row['First_Name'];
$_SESSION["last_name"] = $row['Last_Name'];
$_SESSION["email"] = $row['Email'];
$_SESSION["password"] = $row['Password'];

if(isset($_POST['update']))
{
	$updateFirst_name = $_POST['first_name'];
	$updateLast_name = $_POST['last_name'];
	$updateEmail = $_POST['email'];
	$updatePassword = md5($_POST['pass']);


$sql = mysqli_query($conn, "UPDATE users SET First_name = '$updateFirst_name', Last_Name = '$updateLast_name', Email = '$updateEmail', Password= '$updatePassword' WHERE user_id = $user_id");

header('Location: update.php');
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
	
		<div class="form">
		
			<h3>Update Profile Info</h3>

			<form action="" method="post">

			<input type="text" name="first_name" autocomplete="on" placeholder="First Name" required>

			<input type="text" name="last_name" autocomplete="on" placeholder="Last Name" required>

			<input type="email" name="email" autocomplete="on" placeholder="Email" required>	

			<input type="password" name="pass" placeholder="Password" required><br>

			<input type="submit" value="Update Info" name="update">

			</form>
		
		</div>
		
	</div>
</div>
</body>
</html>