<?php  
	$conn= mysqli_connect('localhost', 'root', '','akmadmin');
	if ($conn) {
		// echo "sukses";
	} else{
		echo mysqli_error($conn);
	}

	function($query){
		global $conn;
		mysqli_query($conn, $query);
	}
?>