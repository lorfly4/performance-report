<?php
include "../koneksi.php";
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan. <a href='index.php'>Kembali</a>");
}

$id = $_GET['id'];
$query = "SELECT * FROM kesimpulan WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['kesimpulan'])) {
    $kesimpulan = $_POST['kesimpulan'];
    $query = "UPDATE kesimpulan SET kesimpulan = '$kesimpulan' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Kesimpulan berhasil diupdate');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Kesimpulan gagal diupdate');</script>";
        echo "<script>window.location.href='edit_kesimpulan.php?id=" . $id . "';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kesimpulan Report</title>
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
        <h2 class="text-center">Edit Kesimpulan Report</h2>
        <form method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" rows="6"
                    name="kesimpulan"><?php echo $row['kesimpulan']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>