<?php
	session_start();

	include './config.php';

	$username = $_POST['email'];
	$password = $_POST['password'];

	// $username = mysqli_real_escape_string($conn, $username);
	// $password = mysqli_real_escape_string($conn, $password);

	$query = "SELECT *
				FROM user
				WHERE email = '$username' AND password = '$password'";

	$data = mysqli_query($conn, $query);

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$row = mysqli_fetch_assoc($data);
		$_SESSION["email_user"] = $username;
		$_SESSION["username_user"] = $row['username'];
		$_SESSION["status_login_user"] = "true";
		
		header("Location: dashboard.php");
	} else {
		header("Location: index.php?pesan=gagal");
	}

?>