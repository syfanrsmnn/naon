<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="container">

<h3 class="fw-bold mb-4">Tambah Mutasi</h3>

<div class="card p-4">

<form method="post">

<label>Barang</label>
<select name="barang" class="form-control mb-3">
<?php
$barang = mysqli_query($koneksi, "SELECT * FROM barang");
while($b = mysqli_fetch_array($barang)){
    echo "<option value='$b[id]'>$b[nama]</option>";
}
?>
</select>

<label>Jenis Mutasi</label>
<select name="jenis" class="form-control mb-3">
    <option value="masuk">Masuk</option>
    <option value="keluar">Keluar</option>
</select>

<label>Jumlah</label>
<input type="number" name="jumlah" class="form-control mb-3">

<label>Tanggal</label>
<input type="date" name="tanggal" class="form-control mb-3">

<label>Keterangan</label>
<textarea name="keterangan" class="form-control mb-3"></textarea>

<button class="btn btn-primary" name="simpan">Simpan</button>

</form>

<?php
if(isset($_POST['simpan'])){

    mysqli_query($koneksi,"
        INSERT INTO mutasi (barang,jenis,jumlah,tanggal,keterangan)
        VALUES ('$_POST[barang]','$_POST[jenis]','$_POST[jumlah]','$_POST[tanggal]','$_POST[keterangan]')");

    if($_POST['jenis'] == "masuk"){

        mysqli_query($koneksi,"UPDATE barang SET jumlah = jumlah + $_POST[jumlah] WHERE id = $_POST[barang]");
    } else {
        mysqli_query($koneksi,"UPDATE barang SET jumlah = jumlah - $_POST[jumlah] WHERE id = $_POST[barang]");
    }

    echo "<script>alert('Data mutasi disimpan');location='mutasi.php'</script>";
}
?>

</div>
</div>
