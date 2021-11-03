<?php
session_start(); //jalanin session
session_unset(); // unset session
session_destroy(); // hapus session

header('Location: ../page/login.php');

exit();
?>