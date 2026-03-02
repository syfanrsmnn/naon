<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>

<div class="container">

<h3 class="fw-bold mb-4">Data Barang</h3>

<a href="tambah_barang.php" class="btn btn-primary mb-3"> Tambah Barang</a>

<div class="card p-4">

<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Nama barang</th>
        <th>Jumlah barang</th>
         <th>Harga satuan</th>
        <th>Jumlah harga satuan</th>

    </tr>
</thead>

<tbody>
<?php
$data = mysqli_query($koneksi, "SELECT * FROM barang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['jumlah'] ?></td>
    <td><?= $d['harga_satuan'] ?></td>
    <td><span class="badge bg-primary"><?= $d['total_harga'] ?></span></td>
</tr>
<?php } ?>
</tbody>

</table>

</div>
</div>
