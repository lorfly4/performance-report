<?php 
error_reporting(0);
require_once("../koneksi.php");
session_start();


 ?>

<?php 
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
    while ($d = mysqli_fetch_array($data)) {
      
    
 ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Idiot-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="icon" href="./picture/bakdat.png">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->

    <title>Ubah Data</title>
</head>

<body>
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ../index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
    <form action="proedit.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">insured name</label>
                <input type="text" class="form-control" name="id" autocomplete="off" value="<?php echo $d['id'];?>"
                    readonly="">
            </div>
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control" name="username" autocomplete="off"
                value="<?php echo $d['username'];?>">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input type="text" class="form-control" name="password" autocomplete="off">

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $d['nama'];?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">role</label>
            <input type="text" class="form-control" name="role" autocomplete="off" value="<?php echo $d['role'];?>">
        </div>

        <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
    </form>
</body>

</html>

<?php } ?>