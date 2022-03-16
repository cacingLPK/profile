<?php 
    include '../proses/funcDB.php';
    $query = mysqli_query($conn, "SELECT * FROM test");
    $result = mysqli_fetch_assoc($query);

?>
<form action="../proses/coba.php" method="POST">
    <input type="text" name="nama" value="<?= $result['nama'] ?>">
    <input type="text" name="alamat" value="<?= $result['alamat'] ?>">
    <button type="submit" name="ok">OK</button>
</form>
