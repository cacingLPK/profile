<?php
include '../proses/funcDB.php';
if (isset($_POST['ok'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $query= "UPDATE test SET nama='$nama',alamat='$alamat' where Id=1";
        mysqli_query($conn, $query);
        echo($query);
    }
?>