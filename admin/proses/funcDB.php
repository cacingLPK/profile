<?php  
	// $conn= mysqli_connect('localhost', 'root', '','akmadmin');
	//$conn= mysqli_connect('localhost', 'akm_admin', 'mobilbalap@','akm_admin');
	$conn = new mysqli('localhost', 'akm_admin', 'mobilbalap@','akm_admin');
	if ($conn) {
		// echo "sukses";
	} else{
		echo "error";
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