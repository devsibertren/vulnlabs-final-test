<?php
	session_start();
	if($_SESSION["status_login_user"] != "true") {
		header("Location: index.php?redirect=add-data.php&pesan=belum_login");
	}

	include './config.php';

	$nama_barang = $_POST['nama_barang'];
	$kuantitas = $_POST['kuantitas'];
	$deskripsi_barang = $_POST['deskripsi_barang'];
	$harga = $_POST['harga'];
	$created_by = $_POST['created_by'];

	$harga = mysqli_real_escape_string($conn, $harga);
	$deskripsi_barang = mysqli_real_escape_string($conn, $deskripsi_barang);
	$nama_barang = mysqli_real_escape_string($conn, $nama_barang);
	$kuantitas = mysqli_real_escape_string($conn, $kuantitas);

	if(empty($nama_barang) || empty($kuantitas) || empty($deskripsi_barang) || empty($harga)) {
		header("Location: add-data.php?error=empty");
		exit();
	} else {
		$query = "INSERT INTO `daftar_barang` (`deskripsi`, `harga`, `id`, `nama_barang`, `kuantitas`, `created_by`) VALUES 
		('".$deskripsi_barang."','".$harga."',NULL,'".$nama_barang."','".$kuantitas."','".$created_by."');";
	
		$data = mysqli_query($conn, $query);
	
		if ($data > 0) {
			header("Location: dashboard.php?success=add");
			exit();
		} else {
			header("Location: add-data.php?error=failed");
			exit();
		}
	}

?>