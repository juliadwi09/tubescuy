<?php
require "connection.php";

//AMBIL DATA DARI INPUTAN DARI USER
if (isset($_POST['submit_detailpesanan'])) {
    $idDetail = $_POST['id_detail'];
    $idPesanan = $_POST['id_pesanan'];
    $jenisLayanan = $_POST['jenis_layanan'];
    $jumlahPakaian = $_POST['jumlah_pakaian'];
    $totalHarga = $_POST['total_harga'];
}

//MASUKKAN PERINTAH SQL
$sql = "INSERT INTO detail_pesanan VALUES ('$idDetail','$idPesanan','$jenisLayanan','$jumlahPakaian','$totalHarga')";

//JALANKAN PERINTAH SQL
$result = mysqli_query($connect, $sql);

//CEK JIKA DATA BERHASIL DI TAMBAH
if ($result == true) {
    echo "<script>alert('Data Berhasil Di Tambah')
    window.location.href='list_detailpesanan.php'</script>";
} else {
    echo "<script>alert('Data Gagal Di Tambah')
    window.location.href='list_detailpesanan.php'</script>";
}
