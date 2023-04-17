<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$date = date("l, j F Y");
	$time = date("h:i A");
	
	if (!empty($name) && !empty($email)) {
		if ($username == "yulitarvc" && $password == "jaemjaem13") {
			include("welcome.php");
		} else {
			echo "<p>Invalid username or password.</p>";
		}
	} else {
		header("Location: error.php");
		exit();
	}
?>