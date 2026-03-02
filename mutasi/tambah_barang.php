<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>

<div class="container">

<h3 class="fw-bold mb-4">Tambah Barang</h3>

<div class="card p-4">

<form method="post">

<label>Kode Barang</label>
<input type="text" name="kode" class="form-control mb-3">

<label>Nama Barang</label>
<input type="text" name="nama" class="form-control mb-3">

<label>Stok Awal</label>
<input type="number" name="stok" class="form-control mb-3">

<button class="btn btn-primary" name="simpan">Simpan</button>

</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO barang VALUES(NULL,'$_POST[kode]','$_POST[nama]','$_POST[stok]')");
    echo "<script>alert('Barang berhasil ditambahkan');location='barang.php'</script>";
}
?>

</div>
</div>
