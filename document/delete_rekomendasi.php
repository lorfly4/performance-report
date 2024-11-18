<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM rekomendasi WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo '<script>alert("Rekomendasi berhasil dihapus");window.location.href="index.php";</script>';
} else {
    echo '<script>alert("Rekomendasi gagal dihapus");window.location.href="index.php";</script>';
}