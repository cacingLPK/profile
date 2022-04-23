<?php  

	$conn = mysqli_connect("localhost","akm_admin","mobilbalap@","akm_cash");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>