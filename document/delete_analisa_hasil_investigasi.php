<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM analisa_hasil_investigasi WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo '<script>alert("Analisa Hasil Investigasi berhasil dihapus");window.location.href="index.php";</script>';
} else {
    echo '<script>alert("Analisa Hasil Investigasi gagal dihapus");window.location.href="index.php";</script>';
}