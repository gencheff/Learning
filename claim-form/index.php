<!DOCTYPE html>
<html>
<head>
	<title>Claim Form</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<?php
	//require 'index.views.php';


      if (isset($_POST['submit'])) {

    	$firstname = $_POST['firstname'];
    	$secondname = $_POST['secondname'];
    	$lastname = $_POST['lastname'];
    	$email = $_POST['email'];
    	$telephone = $_POST['telephone'];
    	$username = $_POST['username'];
    	$password = $_POST['password'];


       }

    ?>

	<h1>Registration Form</h1>
	<div class="container">
		<form action="index.php" method="POST">
			First Name <input type="text" name="firstname"><br>
			Second Name <input type="text" name="secondname"><br>
			Last Name <input type="text" name="lastname"><br>
			Email <input type="email" name="email"><br>
			Telephone <input type="text" name="telephone"><br>
			User Name <input type="text" name="username"><br>
			Password <input type="password" name="password"><br>
			Submit <input type="Submit" name="submit"><br>
		</form>
	</div>





   






</body>
</html>

