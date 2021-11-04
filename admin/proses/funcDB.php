<?php  
	$conn= mysqli_connect('localhost', 'root', '','akmadmin');
	if ($conn) {
		// echo "sukses";
	} else{
		echo "error";
	}

	function($query){
		global $conn;
		mysqli_query($conn, $query);
	}
?>