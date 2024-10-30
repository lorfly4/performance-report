<?php
require_once("../koneksi.php");
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['role'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href = '../login.php';</script>";
    exit();
}

// Periksa apakah pengguna memiliki peran yang sesuai
if ($_SESSION['role'] != 'admin') {
    echo "<script>alert('Anda tidak memiliki akses ke halaman ini!'); window.location.href = '../index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
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
                            <a class="nav-link active" href="user.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php
    require_once("../koneksi.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $username = $_SESSION['username'] ?? null;
    $role = $_SESSION['role'] ?? null;

    if ($username) {
        // Fetch additional user data from the database if needed
        $query = "SELECT username, role FROM user WHERE username='$username'";
        $result = mysqli_query($koneksi, $query);

        if ($data = mysqli_fetch_assoc($result)) {
            $username = $data['username'];
            $role = $data['role'];
        }
    }
    ?>

    <div class="welcome-message">
        <p id="typed-text">
            Hi, <?php echo $username; ?> Selamat Datang Di Halaman Dashboard <?php echo $role; ?>
        </p>
    </div>

    <style>
    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: black;
        }
    }

    #typed-text {
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        border-right: 0.15em solid black;
        animation: typing 4s steps(40, end) infinite alternate, blink-caret 0.75s step-end infinite;
    }
    </style>

    <style>
    .welcome-message {
        margin: 80px auto;
        padding: 30px 20px;
        text-align: center;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>