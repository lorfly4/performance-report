<?php
session_start();
error_reporting(0);
include '../koneksi.php';

// Proses input
if (isset($_POST['ubahdata'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, md5($_POST['password']));
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

    $sql_d = "UPDATE user SET username='$username', password='$password', nama='$nama', role='$role' WHERE id='$id'";
    $data = mysqli_query($koneksi, $sql_d);
    
    if ($data) {
        echo "<script>alert('Ubah Data Dengan ID Karyawan = ".$id." Berhasil')</script>";
        echo "<script>window.location.href = 'user.php'</script>";
    } else {
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href=\"user_edit.php?id=".$id."\"> Kembali Ke Form !</a>";
    }
}
?>
