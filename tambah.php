<?php
include 'koneksi.php';
$id = $_GET['id'];
$r = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id"));

if (isset($_POST['update'])) {
    $judul   = $_POST['judul'];
    $penerbit   = $_POST['penerbit'];
    $tahun_terbit   = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $deskripsi   = $_POST['deskripsi'];
    mysqli_query($conn, "UPDATE buku SET judul='$judul', penerbit='$penerbit', tahun_terbit='$tahun_terbit', stok='$stok', deskripsi='$deskripsi' WHERE id_buku=$id");
    header("Location: index.php");
}
?>

<div class="container mt-4">
  <h2>Edit Buku</h2>
  <form method="POST">
    <input type="text" name="judul" class="form-control mb-2" value="<?= $r['judul'] ?>" required>
    <input type="text" name="penerbit" class="form-control mb-2" value="<?= $r['penerbit'] ?>">
    <input type="text" name="tahun_terbit" class="form-control mb-2" value="<?= $r['tahun_terbit'] ?>">
    <input type="number" name="stok" class="form-control mb-2" value="<?= $r['stok'] ?>">
    <input type="text" name="deskrip" class="form-control mb-2" value="<?= $r['deskripsi'] ?>">
    <button type="submit" name="update" class="btn btn-warning">Update</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</div>