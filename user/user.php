<?php
session_start();
error_reporting(0);
require_once("../koneksi.php");

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['role'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href = '../login.php';</script>";
    exit();
}

// Periksa apakah pengguna memiliki peran yang sesuai
if ($_SESSION['role'] != 'user') {
    echo "<script>alert('Anda tidak memiliki akses ke halaman ini!'); window.location.href = '../index.php';</script>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">DESWA INVISCO MULTITAMA</a>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DIM</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../csv.php">Upload data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../client/client.php">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../document/index.php">Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>