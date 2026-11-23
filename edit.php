<?php
include 'koneksi.php';
$id = $_GET['id'];
$r = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id"));

if (isset($_POST['update'])) {
    $judul   = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit= $_POST['tahun_terbit'];
    $stok    = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    mysqli_query($conn, "UPDATE buku SET judul='$judul', penulis='$penulis', stok='$stok' WHERE id_buku=$id");
    header("Location: index.php");
}
?>
<h2>Edit Buku</h2>
<form method="POST">
  Judul: <input type="text" name="judul" value="<?= $r['judul'] ?>" required><br>
  penerbit: <input type="text" name="penerbit" value="<?= $r['penerbit'] ?>"><br>
  tahun_terbit: <input type="text" name="tahun_terbit" value="<?= $r['tahun_terbit'] ?>"><br>
  Stok: <input type="number" name="stok" value="<?= $r['stok'] ?>"><br>
  deskripsi: <input type="text" name="deskripsi" value="<?= $r['deskripsi'] ?>"><br>
  <button type="submit" name="update">Update</button>
</form>