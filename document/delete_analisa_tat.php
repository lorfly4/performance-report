<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM analisa_tat WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo '<script>alert("Analisa TAT berhasil dihapus");window.location.href="index.php";</script>';
} else {
    echo '<script>alert("Analisa TAT gagal dihapus");window.location.href="index.php";</script>';
}