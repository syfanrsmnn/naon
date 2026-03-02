<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>

<div class="container">

<h3 class="fw-bold mb-4">Data Barang</h3>

<a href="tambah_barang.php" class="btn btn-primary mb-3">+ Tambah Barang</a>

<div class="card p-4">

<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Stok</th>
    </tr>
</thead>

<tbody>
<?php
$data = mysqli_query($koneksi, "SELECT * FROM barang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['kode'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td><span class="badge bg-primary"><?= $d['stok'] ?></span></td>
</tr>
<?php } ?>
</tbody>

</table>

</div>
</div>
