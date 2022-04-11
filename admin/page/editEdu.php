<?php
  session_start();
  require '../proses/funcDB.php';
  
  if (!isset($_SESSION['login'])) {
    header('Location: login.php');
  }
?>
<?php include 'htmlAtas.php' ?>
<?php include 'sidebar.php' ?>
<?php include 'contentEdu.php' ?>
<?php include 'htmlBawah.php' ?>
