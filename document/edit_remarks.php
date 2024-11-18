<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rekomendasi Report</title>
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
        background-color: #007bff;
        border-color: #007bff;
    }

    textarea {
        width: 100%;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Edit Remarks Report</h2>
        <form method="post">
            <div class="form-group">
                <input type="hidden" name="id"
                    value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">
            </div>
            <?php
            include "../koneksi.php";
            $sql = "SELECT result_type, remark FROM remarks WHERE id = ?";
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            ?>
            <div class="form-group">
                <label for="result_type">result_type</label>
                <input class="form-control" type="text" name="result_type">
            </div>

            <div class="form-group">
                <label for="remarks">remarks</label>
                <input class="form-control" id="remarks" rows="6" name="remarks">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>

<?php
include '../koneksi.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result_type = $_POST['result_type'];
    $remark = $_POST['remarks'];
    $sql = "UPDATE remarks SET result_type = ?, remark = ? WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssi", $result_type, $remark, $id);
    if ($stmt->execute()) {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            swal({
                title: "Berhasil!",
                text: "Analisa Hasil Investigasi berhasil diupdate",
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
                text: "Analisa Hasil Investigasi gagal diupdate",
                icon: "error",
                button: "OK",
            }).then(function() {
                window.location.href = "edit_remarks.php?id=' . $id . '";
            });
        </script>';
    }
}
?>