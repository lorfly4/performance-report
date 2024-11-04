<?php
session_start();
include '../koneksi.php';

// Proses input
if (isset($_POST['ubahdata'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $client_id = mysqli_real_escape_string($koneksi, $_POST['client_id'] ?? '');
    $periode = mysqli_real_escape_string($koneksi, $_POST['periode'] ?? '');
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal'] ?? '');

    $sql_d = "UPDATE document SET 
                client_id='$client_id', 
                periode='$periode', 
                tanggal='$tanggal'
              WHERE id='$id'";

    $data = mysqli_query($koneksi, $sql_d);

    if ($data) {
        echo "<script>
                alert('Ubah Data Dengan ID = " . $id . " Berhasil');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "Error: " . mysqli_error($koneksi);
        echo "<br><a href=\"edit.php?id=" . $id . "\"> Kembali Ke Form !</a>";
    }

    mysqli_close($koneksi);
}