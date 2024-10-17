<?php

include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST["client_id"];
    $periode = $_POST["periode"];
    $tanggal = $_POST["tanggal"]; // Assume this is in 'YYYY-MM-DD' format

    // Convert the month part of the tanggal to Indonesian
    $timestamp = strtotime($tanggal);
    $day = date('d', $timestamp);
    $month_number = date('m', $timestamp);
    $year = date('Y', $timestamp);

    // Array of months in Indonesian
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

    // Convert the month number to Indonesian text
    $month_text = $months[$month_number];

    // Format the date as "Day Month Year"
    $formatted_tanggal = $day . ' ' . $month_text . ' ' . $year;

    // Create the SQL INSERT statement
    $query = "INSERT INTO document (client_id, periode, tanggal) VALUES ('$client_id', '$periode', '$formatted_tanggal')";

    // Execute the query
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Register Berhasil');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

?>