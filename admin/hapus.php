<?php
include '../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = "DELETE FROM user WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>alert('Data dengan ID = ".$id." berhasil dihapus');</script>";
} else {
    echo "<script>alert('Gagal menghapus data dengan ID = ".$id."');</script>";
}

header("Location: user.php");
exit;
?>
