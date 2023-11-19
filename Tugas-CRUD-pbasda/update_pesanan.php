<?php
require "connection.php";

if (isset($_POST['submit_pesanan2'])) {
    $idPesanan = $_POST['id_pesanan'];
    $namaPelanggan = $_POST['nama_pelanggan'];
    $tglPesanan = $_POST['tgl_pesanan'];
    $alamatPengambilan = $_POST['alamat_pengambilan'];
}

$sql = "UPDATE pesanan SET id_pesanan='$idPesanan',nama_pelanggan='$namaPelanggan', tgl_pesanan='$tglPesanan', alamat_pengambilan='$alamatPengambilan' WHERE id_pesanan=$idPesanan";

$result = mysqli_query($connect, $sql);

if ($result = true) {
    echo "<script> alert('Data Berhasil Di Ubah')
    window.location.href='list_pesanan.php'</script>";
} else {
    echo "<script> alert('Data Gagal Di Ubah')
    window.location.href='list_pesanan.php'</script>";
}
