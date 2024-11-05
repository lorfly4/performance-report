<?php
include "../koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

if ($id) {
    $sql = "DELETE FROM remarks WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "<script>alert('Data dengan ID = " . $id . " berhasil dihapus');</script>";
    } else {
        echo "<script>alert('Gagal menghapus data dengan ID = " . $id . "');</script>";
    }
    $stmt->close();
}

header("Location: index.php");
exit;