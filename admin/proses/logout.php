<?php
session_start(); //jalanin session
session_unset(); // unset session
session_destroy(); // hapus session

setcookie('dongkap', '', time()-3600);
setcookie('linggih', '', time()-3600);

header('Location: ../page/login.php');

exit();
?>