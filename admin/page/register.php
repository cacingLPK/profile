<?php  
  session_start();
  require '../proses/funcDB.php';
  require '../proses/funcRegister.php';

  if (isset($_SESSION['login'])) {
    header('Location: dashboard.php');
  }

  if (isset($_POST['submit'])){
      if (register($_POST) > 0) {
          echo "<script>alert('user berhasil register');</script>";
      } else {
          echo mysqli_error($conn);
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../css/adminlte.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../css/fontawesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/fontsgoogleapis.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Admin</b>Register</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post"><!-- 
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="namalengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div> -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="user" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="pass2" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="terms.html">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.js"></script>
</body>
</html>
