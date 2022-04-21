<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Education</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Edit Profile</li>
              <li class="breadcrumb-item active">Education</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
        // query buat ambil data about
        $queryAbout = mysqli_query($conn, "SELECT * FROM edu");
        $resultAbout = mysqli_fetch_assoc($queryAbout);
      ?>
      <!-- Default box -->
    <form action="../proses/prosesEditEdu.php" method="POST">
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
            <label for="judulisi">Judul isian: </label>
            <input type="text" name="judulisi" id="judulcontent" value="<?= $resultAbout['judulisi'] ?>">
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
        <div class="card-body">
          <label for="judulisi2">Judul isian 2: </label>
            <input type="text" name="judulisi2" id="judulcontent2" value="<?= $resultAbout['judulisi2'] ?>">
            <textarea name="isi2" id="content2">
              <?= $resultAbout['isi2']; ?>
            </textarea>
            <script>
                ClassicEditor
                  .create( document.querySelector( '#content2' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
            </script>
        <div class="card-body">
            <label for="judulisi3">Judul isian 3: </label>
            <input type="text" name="judulisi3" id="judulcontent3" value="<?= $resultAbout['judulisi3'] ?>">
            <textarea name="isi3" id="content3">
              <?= $resultAbout['isi3']; ?>
            </textarea>
            <script>
                ClassicEditor
                  .create( document.querySelector( '#content3' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
            </script>
            <!-- tester -->
        </div>
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