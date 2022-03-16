<?php  
	// $conn= mysqli_connect('localhost', 'root', '','akmadmin');
	//$conn= mysqli_connect('localhost', 'akm_admin', 'mobilbalap@','akm_admin');
	// //$conn = new mysqli('localhost', 'akm_admin', 'mobilbalap@','akm_admin');
	// if ($conn) {
	// 	// echo "sukses";
	// } else{
	// 	echo "error";
	// }

	$conn = mysqli_connect("localhost","akm_admin","mobilbalap@","akm_admin");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

	// sfsdfsfsdf999999999999999999999999999999999999
	// function query($query){
	// 	global $conn;
	// 	$result = mysqli_query($conn, $query);
	// 	$rows = [];
	// 	while ($row = mysqli_fetch_assoc($result)){
	// 		$rows[]=$row;
	// 	}
	// 	return $rows;
	// }
?>