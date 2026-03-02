<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>
<body>
    <link rel="stylesheet" href="style.css">
</body>

<div class="container">

<h3 class="fw-bold mb-4">Tambah Barang</h3>

<div class="card p-4">

<form method="post">

<label>Nama barang</label>
<input type="text" name="nama" class="form-control mb-3">

<label>Jumlah Barang</label>
<input type="text" name="jumlah" class="form-control mb-3">

<label>Harga satuan</label>
<input type="number" name="harga_satuan" class="form-control mb-3">

<label>Jumlah harga satuan</label>
<input type="number" name="total_harga" class="form-control mb-3">

<button class="btn btn-primary" name="simpan">Simpan</button>

</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"INSERT INTO barang VALUES(NULL,'$_POST[nama]','$_POST[jumlah]','$_POST[harga_satuan]','$_POST[total_harga]')");
    echo "<script>alert('Barang berhasil ditambahkan');location='barang.php'</script>";
}
?>

</div>
</div>
