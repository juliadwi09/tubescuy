<?php
require "connection.php";

$id_detailpesanan = $_GET['id_detailpesanan'];

$sql = "DELETE FROM detail_pesanan WHERE id_pesanan = '$id_detailpesanan'";

$result = mysqli_query($connect, $sql);

if ($result == true) {
    echo "<script> alert('Data Berhasil Di Hapus')
    window.location.href='list_detailpesanan.php'</script>";
} else {
    echo "<script> alert('Data Gagal Di Tambah')
    window.location.href='list_detailpesanan.php'</script>";
}
