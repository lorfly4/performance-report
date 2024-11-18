<?php
include '../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = "DELETE FROM kesimpulan WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>alert('Kesimpulan berhasil dihapus');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus kesimpulan');</script>";
    echo "<script>window.location.href='index.php';</script>";
}