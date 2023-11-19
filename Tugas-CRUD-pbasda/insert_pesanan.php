<?php
require "connection.php";

//AMBIL DATA DARI INPUTAN USER
if (isset($_POST["submit_pesanan"])) {
    $idPesanan = $_POST['id_pesanan'];
    $namaPelanggan = $_POST['nama_pelanggan'];
    $tanggalPesanan = $_POST['tgl_pesanan'];
    $alamatPengambilan = $_POST['alamat_pengambilan'];
}

//MASUKKAN PERINTAH SQL
$sql = "INSERT INTO pesanan VALUES ('$idPesanan','$namaPelanggan','$tanggalPesanan','$alamatPengambilan')";

//JALANKAN PERINTAH SQL
$result = mysqli_query($connect, $sql);

//CEK JIKA DATA BERHASIL DI TAMBAH
if ($result == true) {
    echo "<script>alert('Data Berhasil Di Tambah')
    window.location.href='list_pesanan.php'</script>";
} else {
    echo "<script>alert('Data Gagal Di Tambah')
    window.location.href='list_pesanan.php'</script>";
}
