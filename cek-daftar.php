<?php
	session_start();

	include './config.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$password = $_POST['password'];

	// $username = mysqli_real_escape_string($conn, $username);
	// $password = mysqli_real_escape_string($conn, $password);

	$query = "SELECT * FROM `user` WHERE `email`='".$email."' OR `username`='".$username."'";
	$result = mysqli_query($conn, $query);
	$num_rows = mysqli_num_rows($result);
	
	if ($num_rows > 0) {
		echo "<script>alert('Email atau username sudah digunakan');</script>";
	} else {
		$query = "INSERT INTO `user` (`id`, `fullname`, `username`, `telephone_number`, `email`, `password`) VALUES (NULL, '".$name."', '".$username."', '123', '".$email."', '".$password."');";
		$data = mysqli_query($conn, $query);
		
		if ($data) {
			$_SESSION["email_user"] = $email;
			$_SESSION["username_user"] = $username;
			$_SESSION["status_login_user"] = true;
			echo "<script>alert('Data berhasil disimpan');</script>";
			header("Location: dashboard.php");
		} else {
			echo "<script>alert('Data gagal disimpan');</script>";
			header("Location: index.php");
		}
	}

?>