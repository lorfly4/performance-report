<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST["client_id"];
    $periode = $_POST["periode"];
    $tanggal = $_POST["tanggal"];

    // Convert the date to Indonesian format
    $timestamp = strtotime($tanggal);
    $day = date('d', $timestamp);
    $month_number = date('m', $timestamp);
    $year = date('Y', $timestamp);

    $months = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];
    $month_text = $months[$month_number];
    $formatted_tanggal = $day . ' ' . $month_text . ' ' . $year;

    // Check if file upload is set and valid
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an actual image
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
            $uploadOk = 0;
        }

        // Attempt to upload file if all checks passed
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                // Insert into database
                $query = "INSERT INTO document (client_id, periode, tanggal, foto) VALUES ('$client_id', '$periode', '$formatted_tanggal', '$target_file')";
                if (mysqli_query($koneksi, $query)) {
                    echo "<script>alert('Register Berhasil');</script>";
                    echo "<script>window.location.href='index.php';</script>";
                } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, your file was not uploaded.";
        }
    } else {
        echo "No file was uploaded or an error occurred during file upload.";
    }
}