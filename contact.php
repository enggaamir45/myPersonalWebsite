<?php

require 'include/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(isset($_POST['submit'])){
		
		$name= $_POST['name'];
		$phone= $_POST['phone'];
		$email = $_POST['email'];
		$message= $_POST['message'];		

		session_start();
		mysqli_query($db, "INSERT INTO visitors_query (Name, Email, Phone, Message) VALUES ('$name', '$email', '$phone', '$message')") or die("Unable to send message at this moment");

	header("Location:confirmation_page.php");

		}

	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="progma" content="no-cache" />
<title>Aamir Husain Ansari- Contact</title>
<link type="text/css" rel="stylesheet" href="css/main_stylesheet.css">
<link type="text/css" rel="stylesheet" href="css/secondary_stylesheet.css">
<link type="text/css" rel="stylesheet" href="css/mobile_stylesheet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container">

<?php require 'include/header.php'; ?>
	
<?php require 'include/contact_content.php'; ?>

<?php require 'include/footer.php'; ?>			
</div>	
<script>
	function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}	
</script>	
</body>
</html>