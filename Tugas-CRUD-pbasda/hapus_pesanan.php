<?php
require "connection.php";

$id_pesanan = $_GET['id_pesanan'];

$sql = "DELETE FROM pesanan WHERE id_pesanan = '$id_pesanan'";

$result = mysqli_query($connect, $sql);

if ($result = true) {
    echo "<script> alert('Data Berhasil Di Hapus')
    window.location.href='list_pesanan.php'</script>";
} else {
    echo "<script> alert('Data Gagal Di Tambah')
    window.location.href='list_pesanan.php'</script>";
}
