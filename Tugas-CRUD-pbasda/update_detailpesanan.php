<?php
require "connection.php";

if (isset($_POST['submit_detailpesanan2'])) {
    $idDetail = $_POST['id_detail'];
    $idPesanan = $_POST['id_pesanan'];
    $jenisLayanan = $_POST['jenis_layanan'];
    $jumlahPakaian = $_POST['jumlah_pakaian'];
    $totalHarga = $_POST['total_harga'];
}

$sql = "UPDATE detail_pesanan SET id_detail='$idDetail',id_pesanan='$idPesanan',jenis_layanan='$jenisLayanan',jumlah_pakaian='$jumlahPakaian',total_harga='$totalHarga' WHERE id_pesanan='$idPesanan'";

$result = mysqli_query($connect, $sql);

if ($result == true) {
    echo "<script> alert('Data Berhasil Di Ubah')
    window.location.href='list_detailpesanan.php'</script>";
} else {
    echo "<script> alert('Data Gagal Di Ubah')
    window.location.href='list_detailpesanan.php'</script>";
}
