<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>

<div class="container">

<h3 class="fw-bold mb-4">Laporan Mutasi</h3>

<div class="card p-4 mb-4">

<form method="get" class="row">
    <div class="col-md-4">
        <label>Dari Tanggal</label>
        <input type="date" name="dari" class="form-control mb-3">
    </div>

    <div class="col-md-4">
        <label>Sampai Tanggal</label>
        <input type="date" name="sampai" class="form-control mb-3">
    </div>

    <div class="col-md-4">
        <label>&nbsp;</label><br>
        <button class="btn btn-primary w-100">Tampilkan</button>
    </div>
</form>

</div>

<div class="card p-4">

<table class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Tanggal</th>
        <th>Barang</th>
        <th>Jenis</th>
        <th>Jumlah</th>
    </tr>
</thead>

<tbody>
<?php
if(isset($_GET['dari'])){
    $dari = $_GET['dari'];
    $sampai = $_GET['sampai'];

    $q = mysqli_query($koneksi,"
        SELECT m.*, b.nama 
        FROM mutasi m
        INNER JOIN barang b ON m.barang_id = b.id
        WHERE tanggal BETWEEN '$dari' AND '$sampai'
    ");

    while($d = mysqli_fetch_array($q)){
?>
<tr>
    <td><?= $d['tanggal'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['jenis'] ?></td>
    <td><?= $d['jumlah'] ?></td>
</tr>
<?php 
    }
}
?>
</tbody>

</table>

</div>

</div>
