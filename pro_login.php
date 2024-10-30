<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']); // Mengenkripsi password dengan md5

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password ditemukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['role'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:./admin/admin.php");
    } else if ($data['role'] == "user") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "user";
        // alihkan ke halaman dashboard pegawai
        header("location:./user/user.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:./login.php?pesan=gagal");
    }
} else {
    header("location:./login.php?pesan=gagal");
}