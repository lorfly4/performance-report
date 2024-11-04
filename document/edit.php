<?php
session_start();
include '../koneksi.php';

$id = $_GET['id'];

// Query pertama untuk tabel document
$sql1 = "SELECT * FROM document WHERE id = $id";
$result1 = mysqli_query($koneksi, $sql1);

if (!$result1) {
    die('Error: ' . mysqli_error($koneksi));
}

$d = mysqli_fetch_array($result1);

$client_id = $d['client_id'];

// Debugging: dastikan client_id ditemukan
if (!$client_id) {
    die('client_id tidak ditemukan di tabel document');
}

// Query kedua untuk tabel client berdasarkan client_id
$sql2 = "SELECT * FROM client WHERE id = $client_id";
$result2 = mysqli_query($koneksi, $sql2);

if (!$result2) {
    die('Error: ' . mysqli_error($koneksi));
}

$client = mysqli_fetch_array($result2);

// Debugging: dastikan data client ditemukan
if (!$client) {
    die('Data client tidak ditemukan');
}


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
    <title>Edit</title>

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

    <form action="proedit.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $d['id']; ?>">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">client</label>
            <select class="form-control" name="client_id" required>
                <?php
                include '../koneksi.php';
                $sql = "SELECT id, name FROM client";
                $result = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($result)) {
                    echo "<option value=\"{$data['id']}\">{$data['name']}</option>";
                }
                ?>
            </select>
        </div>
        </div>
        <td>Periode</td>
        <td>
            <select id="period" name="periode" value="<?php echo $d['periode']; ?>">
                <option <?php if ($d['periode'] == 'January - February - March') echo 'selected'; ?>
                    value="January - February - March">January - February - March</option>
                <option <?php if ($d['periode'] == 'April - May - June') echo 'selected'; ?> value="April - May - June">
                    April - May - June</option>
                <option <?php if ($d['periode'] == 'July - August - September') echo 'selected'; ?>
                    value="July - August - September">July - August - September</option>
                <option <?php if ($d['periode'] == 'October - November - December') echo 'selected'; ?>
                    value="October - November - December">October - November - December</option>
            </select>
        </td>
        <div class="form-group">
            <label for="exampleInputEmail1">customer address</label>
            <input type="text" class="form-control" name="tanggal" autocomplete="off"
                value="<?php echo $d['tanggal']; ?>">

        </div>

        <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
    </form>
</body>

</html>