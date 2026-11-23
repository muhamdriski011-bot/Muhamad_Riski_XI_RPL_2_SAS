<?php include 'koneksi.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
  <h2>Data Buku</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Buku</a>

  <table class="table table-bordered table-striped">
    <tr>
      <th>No</th><th>Judul</th><th>Penulis</th><th>Stok</th><th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $data = mysqli_query($conn, "SELECT * FROM buku");
    while ($r = mysqli_fetch_assoc($data)) {
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $r['judul'] ?></td>
      <td><?= $r['penerbit'] ?></td>
      <td><?= $r['tahun_terbit'] ?></td>
      <td><?= $r['stok'] ?></td>
      td><?= $r['deskripsi'] ?></td>
      <td>
        <a href="edit.php?id=<?= $r['id_buku'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $r['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>