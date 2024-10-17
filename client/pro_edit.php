<?php
session_start();
error_reporting(E_ALL); // Aktifkan error reporting untuk debugging
ini_set('display_errors', 1);
include '../koneksi.php';

// Proses input
if (isset($_POST['ubahdata'])) {
    $id = $_POST['id'];
    $name = $_POST["name"];    

    // Penanganan untuk input gambar
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $target_dir = "../client/upload/";
        $target_file = $target_dir . basename($image);
        
        // Pindahkan file yang diupload ke direktori target
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $sql_d = "UPDATE client SET name='$name', image='$image' WHERE id='$id'";
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
            exit();
        }
    } else {
        $sql_d = "UPDATE client SET name='$name', dokter='$dokter' WHERE id='$id'";
    }

    $data = mysqli_query($koneksi, $sql_d);
    
    if ($data) {
        echo "<script>alert('Ubah Data Dengan ID Karyawan = ".$id." Berhasil')</script>";
        echo "<script>window.location.href = 'client.php'</script>";
    } else {
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href=\"edit.php?id=".$id."\"> Kembali Ke Form !</a>";
    }
}
?>