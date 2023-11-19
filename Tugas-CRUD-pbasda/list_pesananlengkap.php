<?php
require "connection.php";

//menampilkan list data 
$sql = "SELECT * FROM pesanan JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan";

$result = mysqli_query($connect, $sql);

// //passing id_pesanan yang telah di ambil dari tombol modal ubah di bawah
// $id_pesanan1 = $_GET['id_pesanan'];
// //mengambil data berdasarkan id
// $sql1 = "SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan1'";
// //eksekusi variable sql
// $result1 = mysqli_query($connect, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI LAUNDRY</title>
</head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown animate__slow 15s" id="navbar-container">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">LAUNDRY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
                    <a class="nav-link" href="list_harga.html">List Harga</a>
                    <a class="nav-link" href="list_pesanan.php">Pesanan</a>
                    <a class="nav-link" href="list_detailpesanan.php">Detail Pesanan</a>
                    <a class="nav-link active" href="list_pesananlengkap.php">Detail Pesanan Lengkap</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- CONTENT START -->
    <table class="table table-striped animate__animated animate__fadeInDown animate__slow 5s">
        <thead>
            <tr>
                <th scope="col">ID PESANAN</th>
                <th scope="col">ID DETAIL</th>
                <th scope="col">NAMA PELANGGAN</th>
                <th scope="col">TANGGAL PESANAN</th>
                <th scope="col">ALAMAT PENGAMBILAN</th>
                <th scope="col">JENIS LAYANAN</th>
                <th scope="col">JUMLAH PAKAIAN</th>
                <th scope="col">TOTAL HARGA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $value) :  ?>
                <tr>
                    <th scope="row"><?= $value["id_pesanan"] ?></th>
                    <td><?= $value["id_detail"] ?></td>
                    <td><?= $value["nama_pelanggan"] ?></td>
                    <td><?= $value["tgl_pesanan"]  ?></td>
                    <td><?= $value["alamat_pengambilan"]  ?></td>
                    <td><?= $value["jenis_layanan"] ?></td>
                    <td><?= $value["jumlah_pakaian"] ?></td>
                    <td>Rp.<?= $value["total_harga"] ?></td>
                </tr>
            <?php endforeach;  ?>
        </tbody>
    </table>
    <!-- CONTENT END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>