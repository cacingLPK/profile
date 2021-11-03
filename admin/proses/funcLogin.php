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
			$_SESSION['login']=true;
			header('Location: ../page/dashboard.php');
			exit();
		} else {
			echo "
				<script>alert('password salah');</script>
			";
		}
	} else {
		echo "
			<script>alert('username salah');</script>
		";
	}
}

?>