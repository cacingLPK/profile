<?php
  session_start();
  require '../proses/funcDB.php';
  
  if (!isset($_SESSION['login'])) {
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../css/fontsgoogleapis.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/fontawesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.css">
  <link rel="stylesheet" href="../css/summernote.css">
  <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../proses/logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="../img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CMS AKM</span>
    </a>
    <!-- ambil data user dari database sesuai user yang login -->
    <?php
    $query = mysqli_query($conn, "SELECT username FROM users");
    $result = mysqli_fetch_assoc($query);
    
    ?>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= "iiii" ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Edit Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="editAbout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editSkills.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editEducation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editExperience.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editBlog.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editContact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit About</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Edit Profile</li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
        // query buat ambil data about
        $queryAbout = mysqli_query($conn, "SELECT * FROM about");
        $resultAbout = mysqli_fetch_assoc($queryAbout);
      ?>
      <!-- Default box -->
      <form action="" method="POST">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Meta Header</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <div class="card-body">
            <textarea name="meta" id="meta">
              <?php 
                $dataMeta = $resultAbout['meta'];
                echo $dataMeta;
              ?>
            </textarea>
            <script>
                ClassicEditor
                  .create( document.querySelector( '#meta' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
            </script>
            <!-- tester -->
        </div>
      </div>
      <!-- </form> -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">H2</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <div class="card-body">
            <textarea name="header" id="header">
              <?= $resultAbout['h2']; ?>
            </textarea>
            <script>
                ClassicEditor
                  .create( document.querySelector( '#header' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
            </script>
            <!-- tester -->
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Content</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <div class="card-body">
            <textarea name="isi" id="content">
              <?php 
                $dataIsi = $resultAbout['isi'];
                echo $dataIsi;
              ?>
            </textarea>
            <script>
                ClassicEditor
                  .create( document.querySelector( '#content' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
            </script>
            <!-- tester -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>
        <!-- /.card-footer-->
        <?php 
          // insert data edit
          if (isset($_POST['save'])){
            $meta = $_POST['meta'];
            $header = $_POST['header'];
            $isi = $_POST['isi'];
            $updateAbout = mysqli_query($conn, "UPDATE about SET 
              meta = '$meta', 
              h2 = '$header',
              isi = '$isi'
            ");
            echo "<meta http-equiv='refresh' content='0'>";
          } 
        ?>
      </div>
      <!-- /.card -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; <?php echo date("Y") ?> <a href="">akm.web.id</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../js/demo.js"></script>
</script>
</body>
</html>