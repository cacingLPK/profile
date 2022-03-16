<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Skills</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Edit Profile</li>
              <li class="breadcrumb-item active">Skills</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
        // query buat ambil data about
        $queryAbout = mysqli_query($conn, "SELECT * FROM skills");
        $resultAbout = mysqli_fetch_assoc($queryAbout);
      ?>
      <!-- Default box -->
    <form action="../proses/prosesEditAbout.php" method="POST">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Meta Header</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <div class="card-body">
            <textarea name="meta" id="meta">
              <?= $resultAbout['meta']; ?>
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
              <?= $resultAbout['isi']; ?>
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
      </div>
      <!-- /.card -->
      </form>
    </section>
    <!-- /.content -->
  </div>