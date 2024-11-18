<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM analisa_top_wilayah WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo '<script>alert("Analisa Top 3 Wilayah berhasil dihapus");window.location.href="index.php";</script>';
} else {
    echo '<script>alert("Analisa Top 3 Wilayah gagal dihapus");window.location.href="index.php";</script>';
}