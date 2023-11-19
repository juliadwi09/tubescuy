<?php
require "connection.php";

//menampilkan list data 
$sql = "SELECT * FROM pesanan";

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
                    <a class="nav-link active" href="list_pesanan.php">Pesanan</a>
                    <a class="nav-link" href="list_detailpesanan.php">Detail Pesanan</a>
                    <a class="nav-link" href="list_pesananlengkap.php">Detail Pesanan Lengkap</a>
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
                <th scope="col">NAMA PELANGGAN</th>
                <th scope="col">TANGGAL PESANAN</th>
                <th scope="col">ALAMAT PENGAMBILAN</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $value) :  ?>
                <tr>
                    <th scope="row"><?= $value["id_pesanan"] ?></th>
                    <td><?= $value["nama_pelanggan"] ?></td>
                    <td><?= $value["tgl_pesanan"]  ?></td>
                    <td><?= $value["alamat_pengambilan"]  ?></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            Hapus
                        </button>
                        <a href="#exampleModal2?=<?= $value["id_pesanan"] ?>"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Ubah
                            </button></a>
                    </td>
                </tr>


            <?php endforeach;  ?>
        </tbody>
    </table>
    <!-- CONTENT END -->

    <!-- MODAL UNTUK UPDATE DATA START-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">UBAH DATA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="update_pesanan.php" method="post">
                        <div class="mb-3">
                            <label for="idPesanan" class="form-label">ID Pesanan</label>
                            <input type="text" class="form-control" name="id_pesanan" id="idPesanan" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Masukkan ID Pesanan</div>
                        </div>
                        <div class="mb-3">
                            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pelanggan" id="namaPelanggan" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Masukkan Nama Pelanggan
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPesanan" class="form-label">Tanggal Pesanan</label>
                            <input type="date" class="form-control" name="tgl_pesanan" id="namaPelanggan" aria-describedby="textHelp">
                            <div id=" textHelp" class="form-text">Masukkan Tanggal Pesanan
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamatPengambilam" class="form-label">Alamat Pengambilan</label>
                            <input type="text" class="form-control" name="alamat_pengambilan" id="alamatPengambilam" aria-describedby="textHelp">
                            <div id=" textHelp" class="form-text">Masukkan Alamat Pengambilan
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" id="submit_pesanan2" name="submit_pesanan2">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UNTUK UPDATE DATA END -->

    <!-- MODAL UNTUK TAMBAH DATA START-->

    <!-- TOMBOL UNTUK MENTRIGGER MODAL SEKALIGUS TAMBAH DATA-->
    <button type="button" class="btn btn-primary animate__animated animate__fadeInDown animate__slow 5s" data-bs-toggle="modal" data-bs-target="#modaltambahData">
        Tambah Data
    </button>

    <div class="modal fade" id="modaltambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAH DATA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insert_pesanan.php" method="post">
                        <div class="mb-3">
                            <label for="idPesanan" class="form-label">ID Pesanan</label>
                            <input type="text" class="form-control" name="id_pesanan" id="idPesanan" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Masukkan ID Pesanan</div>
                        </div>
                        <div class="mb-3">
                            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pelanggan" id="namaPelanggan" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Masukkan Nama Pelanggan</div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPesanan" class="form-label">Tanggal Pesanan</label>
                            <input type="date" class="form-control" name="tgl_pesanan" id="namaPelanggan" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Masukkan Tanggal Pesanan</div>
                        </div>
                        <div class="mb-3">
                            <label for="alamatPengambilam" class="form-label">Alamat Pengambilan</label>
                            <input type="text" class="form-control" name="alamat_pengambilan" id="alamatPengambilam" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Masukkan Alamat Pengambilan</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" id="submit_pesanan" name="submit_pesanan">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UNTUK TAMBAH DATA END -->

    <!-- MODAL UNTUK CHECK HAPUS DATA START  -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">HAPUS DATA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin ingin Menghapus Data?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="hapus_pesanan.php?id_pesanan=<?= $value["id_pesanan"] ?>"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ya</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UNTUK CHECK HAPUS DATA END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>