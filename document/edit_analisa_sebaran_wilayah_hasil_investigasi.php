<?php
include "../koneksi.php";
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan. <a href='index.php'>Kembali</a>");
}

$id = $_GET['id'];
$query = "SELECT * FROM analisa_sebaran_wilayah_hasil_investigasi WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$analisa = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Analisa Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 600px;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    textarea {
        width: 100%;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Edit Analisa Report</h2>
        <form method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $analisa['id']; ?>">
            </div>

            <div class="form-group">
                <label for="analisa">Analisa</label>
                <textarea class="form-control" id="analisa" rows="6"
                    name="analisa"><?php echo $analisa['analisa']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['analisa'])) {
    $analisa = $_POST['analisa'];
    $query = "UPDATE analisa_sebaran_wilayah_hasil_investigasi SET analisa = '$analisa' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            swal({
                title: "Berhasil!",
                text: "Analisa berhasil diupdate",
                icon: "success",
                button: "OK",
            }).then(function() {
                window.location.href = "index.php";
            });
        </script>';
    } else {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            swal({
                title: "Gagal!",
                text: "Analisa gagal diupdate",
                icon: "error",
                button: "OK",
            }).then(function() {
                window.location.href = "edit_analisa.php?id=' . $id . '";
            });
        </script>';
    }
}
?>