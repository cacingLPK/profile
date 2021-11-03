<?php 
  //session_start();
  require '../proses/funcLogin.php';

  if (isset($_SESSION['login'])) {
     header('Location: dashboard.php');
  }

  // if (isset($_SESSION['salahPassword'])) {
  //   echo "passwordlu salah cok";
  // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../css/fontsgoogleapis.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/fontawesome.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center"> 
      <a href="#" class="h1"><b>Admin </b>Profile</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="user" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
<?php if (isset($_POST['submit']) && isset($_SESSION['salahPassword'])) :?>
  <script>
    Swal.fire({
      title: "Passowrd Salah!",
      text: "Do you want to continue",
      icon: "error"
    });
  </script>
<?php endif; ?>

<?php if(isset($_POST['submit']) && isset($_SESSION['salahUsername'])): ?>
  <script>
    Swal.fire({
      title: "Username Salah!",
      text: "Do you want to continue",
      icon: "error"
    });
  </script>
<?php endif; ?>
</body>
</html>
