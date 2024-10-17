<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'sistematisasi');
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

?>