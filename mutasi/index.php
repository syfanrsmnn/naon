<?php include "koneksi.php"; ?>
<?php include "navbar.php"; ?>
<div class="container">
    <h3 class="fw-bold mb-4">Dashboard</h3>
    <div class="row">

    
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <h5 class="text-muted">Total Barang</h5>
                <h2 class="text-primary">
                    <?php 
                    $brg = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) as jml FROM barang"));
                    echo $brg['jml'];
                    ?>
                </h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 text-center">
                <h5 class="text-muted">Mutasi Hari Ini</h5>
                <h2 class="text-success">
                    <?php 
                    $tgl = date("Y-m-d");
                    $m = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(*) as jml FROM mutasi WHERE tanggal='$tgl'"));
                    echo $m['jml'];
                    ?>
                </h2>
            </div>
        </div>

    </div>
</div>
