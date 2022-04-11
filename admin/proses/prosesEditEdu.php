<?php
    include 'funcDB.php';
    if (isset($_POST['save'])){
        $meta = $_POST['meta'];
        $header = $_POST['header'];
        $isi = $_POST['isi'];
        //print_r($header);
        //$update = mysqli_query($conn,"UPDATE about SET meta='$meta', h2='$header', isi='$isi' WHERE Id=1");
        $query= "UPDATE edu SET meta='$meta',h2='$header',isi='$isi' where Id=1";
        mysqli_query($conn, $query);
        echo($query);
      }
      
      header("Location: ../page/editEdu.php");
?>