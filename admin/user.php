<?
error_reporting(0);
require_once("../koneksi.php");
session_start();
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
<style>
th {
    text-align: center;
}
</style>

<body>
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ../index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DESWA INVISCO MULTITAMA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DIM</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="admin.php">dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../client/client.php">Client</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="user.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="logout.php">logout</a>
                            </li>
                    </div>
                </div>
            </div>
    </header>
    <main class="mt-3">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="table-responsive table--no-card m-b-30">
                            <form action="user_save.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <table class="table table-borderless table-striped table-earning">

                                        <tbody>
                                            <tr>
                                                <td>Username</td>
                                                <td>

                                                    <input type="text" class="form-control" name="username"
                                                        autocomplete="off">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>

                                                    <input type="text" class="form-control" name="password"
                                                        autocomplete="off">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" name="nama"
                                                        autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>role</td>
                                                <td><input type="text" class="form-control" name="role"
                                                        autocomplete="off"></td>
                                            </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan"
                                                        class="btn btn-primary">Simpan</button></td>
                                                <td><input type="reset" name="" value="Batal" class="btn btn-danger">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <?php 
                        include '../koneksi.php';
                        $query1 = "SELECT * FROM user ORDER BY id";

                        $pola = 'asc';
                        $polabaru = 'asc';

                        if (isset($_GET['orderby'])) {
                            $orderby = $_GET['orderby'];
                            $pola = $_GET['pola'];

                        $query1 = "SELECT * FROM user ORDER BY $orderby $pola";
                        mysqli_query($koneksi, $query1);
                        if ($pola=='asc') {
                            $polabaru = 'desc';
                        }else{
                            $polabaru = 'asc';
                        }

                        }
                         ?>
                                    <div class="row">

                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>

                                                        <th>id</th>
                                                        <th>Nama</th>
                                                        <th>username</th>
                                                        <th>role</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <?php 
                                            

                                            $no = 1;
                                          
                                                
                                            
                                         ?>
                                                <tbody>

                                                    <?php 
                                           $no++;
                                            include 'paging.php';

                                            ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link"
                                                <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                                        </li>
                                        <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?>
                                        <li class="page-item"><a class="page-link"
                                                href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                        <?php
                }
                ?>
                                        <li class="page-item">
                                            <a class="page-link"
                                                <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                                        </li>
                                    </ul>

                                    <!-- Modal -->
                                </div>


                        </div>
                    </div>
                </div>

            </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>