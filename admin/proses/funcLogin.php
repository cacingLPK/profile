<?php 
session_start();
require 'funcDB.php';

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$cekUsername=mysqli_query($conn, "SELECT * from users where username = '$username'");

	if (mysqli_num_rows($cekUsername)===1){
		$ambilDariDB = mysqli_fetch_assoc($cekUsername);
		
		if (password_verify($password,$ambilDariDB['password'])) {
			// set session
			$_SESSION['login']=true;

			if(isset($_POST['ingat'])){
			// set cookies buat ambil data ID dari db
			setcookie("dongkap", $ambilDariDB['Id'], time()+60);
			// set cookies buat ambil data username dari db
			setcookie("linggih", hash('sha256', $ambilDariDB['username']), time()+60);
			}
			header('Location: ../page/dashboard.php');
			exit();
		} else {
			// echo '
			// 	<script>alert("username salah");</script>
				
			//  ';
			$_SESSION['salahPassword'] = true;
		}
	} else {
		// echo "
		// 	<script>alert('username salah');</script>
		// ";
		
		$_SESSION['salahUsername'] = false;
	}
}

?>