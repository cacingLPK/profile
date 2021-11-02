<?php 
	require 'funcDB.php';

	function register($data) {
		global $conn;

		$username=strtolower(stripslashes($data['user']));
		$password=mysqli_real_escape_string($conn, $data['pass']);
		$password2=mysqli_real_escape_string($conn, $data['pass2']);

		// cek password harus sama saat konfirmasi
		if ($password !== $password2) {
			echo "<script>alert('password tidak sesuai');</script>";
			return false;
		}

		//cek duplikat user
		$cek = mysqli_query($conn, "SELECT username from users");
		
		if (mysqli_fetch_assoc($cek)) {
			echo "<script>alert('username sudah terdaftar');</script>";
			return false;
		}

		// encrypt password pake hash
		$password=password_hash($password, PASSWORD_DEFAULT);

		// insert data ke db
		mysqli_query($conn, "INSERT INTO users VALUES(
			'',
			'$username',
			'$password',
			1
			)");

		// balikin nilai true
		//return 1;
	}
?>