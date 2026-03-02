<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>

<div class="container">

<h3 class="fw-bold mb-4">Data Mutasi</h3>

<a href="tambah_mutasi.php" class="btn btn-primary mb-3">+ Tambah Mutasi</a>

<div class="card p-4">

<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Tanggal</th>
        <th>Barang</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
    </tr>
</thead>

<tbody>
<?php
$q = mysqli_query($koneksi,"
    SELECT m.*, b.nama 
    FROM mutasi m 
    INNER JOIN barang b ON m.barang_id = b.id
    ORDER BY m.id DESC
");
while($d = mysqli_fetch_array($q)){
?>
<tr>
    <td><?= $d['tanggal'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td><span class="badge bg-success"><?= $d['jenis'] ?></span></td>
    <td><?= $d['jumlah'] ?></td>
    <td><?= $d['keterangan'] ?></td>
</tr>
<?php } ?>
</tbody>

</table>

</div>
</div>
