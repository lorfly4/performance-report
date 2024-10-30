<?php
include 'koneksi.php';
session_start();

$id = $_GET['id'];

// Query pertama untuk tabel document
$sql1 = mysqli_query($koneksi, "SELECT * FROM document WHERE id = $id");
$p = mysqli_fetch_array($sql1);

$client_id = $p['client_id'];

// Debugging: pastikan client_id ditemukan
if (!$client_id) {
    die('client_id tidak ditemukan di tabel document');
}

// Query kedua untuk tabel client berdasarkan client_id
$sql2 = mysqli_query(mysql: $koneksi, query: "SELECT * FROM client WHERE id = $client_id");
$client = mysqli_fetch_array(result: $sql2);

// Debugging: pastikan data client ditemukan
if (!$client) {
    die('Data client tidak ditemukan');
}

$image = $client['image'];
$nama = $client['name'];

// Debugging: pastikan image ditemukan
if (!$image) {
    die('Gambar tidak ditemukan untuk client_id ' . $client_id);
}

$client_name = $client['name'];
if ($client_name == 'PT Asuransi Allianz Indonesia') {
    $tabel = 'allianz';
} else if ($client_name == 'PT. MSIG Insurance Life') {
    $tabel = 'msig';
} else if ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
    $tabel = 'generali';
} else {
    die('client_name tidak ditemukan');
}

$sql = "SELECT * FROM $tabel";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    die('Query error: ' . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" type="text/css" id="u0"
        href="https://id.rakko.tools/tools/129/lib/tinymce/skins/ui/oxide/content.min.css" />
    <link rel="stylesheet" type="text/css" id="u1"
        href="https://id.rakko.tools/tools/129/lib/tinymce/skins/content/default/content.min.css" />
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .gambar {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 30vh;
        margin: auto;
        background-color: #4285F4;
        color: white;
        text-align: center;
        box-sizing: border-box;
    }

    img {
        width: 200px;
        height: auto;
    }

    @media print {
        @page {
            size: potrait;
            margin: 0;
        }

        body {
            margin: 1cm;
            -webkit-print-color-adjust: exact;
        }

        header,
        footer {
            display: none;
        }
    }

    .page-break {
        page-break-before: always;
    }
    </style>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="./img/background.jpg" style="width: 70vw; height: 60vh;">
    </div>
    <div class="container">
        <h1>PERFORMANCE REPORT</h1>
        <p><br></p>
        <img src="./client/upload/<?php echo htmlspecialchars(string: $image); ?>" alt="Logo"
            style="width: 300px; height: auto; margin: auto;">
        <h1>Periode : <?php echo $p['periode']; ?></h1>
    </div>

    <div class="page-break"></div>

    <p>
        <strong>&nbsp;<img src="./img/dim.png" width="179" height="84" alt="" /></strong>
    </p>
    <p><strong>—————————————————————————————————————————————</strong></p>
    <p><strong>KATA PENGANTAR</strong></p>
    <p>
        <strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><strong>—</strong><span
            id="_mce_caret" data-mce-bogus="1" data-mce-type="format-caret"><strong>﻿</strong></span>
    </p>
    <p>
        Kami mengucapkan terima kasih atas kepercayaan yang telah diberikan oleh
        <?php echo htmlspecialchars($client['name']); ?> kepada PT. Deswa Invisco Multitama (DIM)
        dalam melakukan investigasi atas klaim – klaim asuransi yang terjadi.
    </p>
    <p>
        Perlu kami sampaikan bahwa investigasi ini bertujuan untuk mencari,
        mengumpulkan serta mendapatkan informasi serta data dan fakta yang
        berkaitan dengan nasabah sebagai pembuktian apakah terdapat
        <em>Non Dislosure</em>, <em>Pre-Existing Condition</em> (PEC) dan/atau
        indikasi kecurangan yang dilakukan baik oleh Tertanggung, Ahli Waris
        maupun agen atas polis tersebut dan hal ini dalam jangka panjang sebagai
        langkah antisipatif untuk panduan proses klaim kedepannya.
    </p>
    <p>
        Kami berharap agar <em>Investigation </em><em>P</em><em>erformance </em><em>R</em><em>eport</em> ini dapat
        menjadi dasar serta acuan dalam
        pengambilan keputusan klaim selanjutnya dan sebagai panduan atas proses
        klaim yang telah atau sedang berjalan.
    </p>
    <p>
        Jika ada informasi atau hal-hal dalam laporan ini yang masih perlu untuk
        dimintakan penjelasan lebih lanjut kami akan dengan senang hati membantu.
    </p>
    <p>
        Demikian informasi ini kami sampaikan, kami berharap semoga kerjasama yang
        terjalin dengan baik selama ini akan terus dapat kita tingkatkan kedepan.
    </p>
    <p>Salam,</p>
    <p><br /></p>
    <p>Jakarta, 14 Januari 2024</p>
    <p><strong>PT Deswa Invisco Multitama (DIM) </strong></p>
    <p><br /></p>
    <p>
        <img src="./img/pa dedi.png" width="225" height="82" alt="" /><br />
    </p>
    <p>
        <strong><u>Dedi Dwi Kristanto, SE, MM, AAAI-J, CPLHI, QIP, ICCA, CLDS</u></strong>
    </p>
    <p>
        <strong><em>Chief Executive Officer</em></strong>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="page-break"></div>

    <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
    <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
    </p>
    <p>Informasi Umum</p>
    <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
    </p>
    <p>Wilayah Sebaran Investigasi</p>
    <div><img src="./img/peta.png" alt=" " style="width: 30vw; height:  10vh;" /></div>
    <p>Jumlah kasus selesai Per Provinsi</p>
    <p>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
    </p>
    <strong>
        <p>Analisa:</p>
    </strong>
    <ol style="list-style-type: decimal;margin-left:12.5px;">
        <li><strong><span style="font-family:DengXian;font-size:12.0pt;line-height:107%;color:black;">Berdasarkan jumlah
                    kasus yang dilakukan investigasi</span></strong><span style="font-size:8.0pt;line-height:107%;"><a
                    id="_anchor_1" href="#_msocom_1" language="JavaScript" name="_msoanchor_1"></a></span></li>
    </ol>
    <p style="margin-top:8.0pt;margin-right:-28.15pt;margin-bottom:.0001pt;margin-left:13.5pt;text-align:justify;"><span
            style="font-size:16px;color:black;">&nbsp; &nbsp; &nbsp; &nbsp; Total kasus yang telah dilakukan investigasi
            pada periode Januari 2023 &ndash; Desember 2023 adalah sebanyak
            <?php
            $insured_name = array();
            foreach ($result as $key => $value) {
                $insured_name = array_merge($insured_name, explode(',', $value['Insured Name']));
            }
            $total_insured_name = count(array_unique($insured_name));
            echo number_format($total_insured_name, 0, '.', ','); ?> nasabah
            dengan total polis <?php
                                $nomor_polis = array();
                                foreach ($result as $key => $value) {
                                    $nomor_polis = array_merge($nomor_polis, explode(',', $value['Nomor Polis']));
                                }
                                $total_nomor_polis = count(array_unique($nomor_polis));
                                echo number_format($total_nomor_polis, 0, '.', ','); ?> </p>
    <div id="_com_2" language="JavaScript"><br></div>
    <table style="border-collapse: collapse; width: 90%; height: 482px;" border="1">
        <tbody>
            <tr style="height: 10px;">
                <td style="width: 16.1%; text-align: center; height: 10px; background-color: #007bff; color: white;">
                    Provinsi</td>
                <td style="width: 12.4714%; text-align: center; height: 10px; background-color: #007bff; color: white;">
                    Case by Polis</td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    % Total</td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    Case by Client</td>
                <td style="width: 14.2857%; height: 10px; background-color: #007bff; color: white;">% Case by Client
                </td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    Total UP</td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    % Total UP</td>
            </tr>

            <?php
            $provinsi_list = array();
            $nomor_polis_all = array(); // Inisialisasi array
            $insured_name_all = array(); // Inisialisasi array
            $total_up_all_all = 0; // Inisialisasi total uang pertanggungan

            // Looping untuk membangun daftar provinsi dari kolom Provinsi dan Provinsi 2
            foreach ($result as $key => $value) {
                if (!empty($value['Provinsi'])) {
                    $provinsi_list[] = ucwords(strtolower($value['Provinsi']));
                }
                if (!empty($value['Provinsi 2'])) {
                    $provinsi_list[] = ucwords(strtolower($value['Provinsi 2']));
                }
            }
            $provinsi_list = array_unique($provinsi_list); // Hapus duplikat
            sort($provinsi_list); // Urutkan provinsi

            $total_nomor_polis_all = 0;
            $total_insured_name_all = 0;
            $total_up_all_all = 0;

            // Hitung total nomor polis, insured name, dan uang pertanggungan dari seluruh data
            foreach ($result as $key => $value) {
                $nomor_polis_all = array_merge($nomor_polis_all, explode(',', $value['Nomor Polis']));
                $total_nomor_polis_all += count(array_unique(explode(',', $value['Nomor Polis'])));

                $insured_name_all = array_merge($insured_name_all, explode(',', $value['Insured Name']));
                $total_insured_name_all += count(array_unique(explode(',', $value['Insured Name'])));

                $uang_pertanggungan_all = array_map('intval', explode(',', $value['UP']));
                $total_up_all_all += array_sum($uang_pertanggungan_all);
            }

            // Loop untuk menampilkan data per provinsi
            foreach ($provinsi_list as $provinsi) {
            ?>
            <tr style="height: 22px;">
                <td style="width: 16.1%; text-align: center; height: 22px;"><?php echo $provinsi; ?></td>
                <?php
                    // Case by Polis
                    $nomor_polis = array();
                    foreach ($result as $key => $value) {
                        if (strtolower($value['Provinsi']) == strtolower($provinsi) || strtolower($value['Provinsi 2']) == strtolower($provinsi)) {
                            $nomor_polis = array_merge($nomor_polis, explode(',', $value['Nomor Polis']));
                        }
                    }
                    $total_nomor_polis = count(array_unique($nomor_polis));
                    echo '<td style="width: 12.4714%; height: 22px;">' . number_format($total_nomor_polis, 0, '.', ',') . '</td>';

                    // % Total Polis
                    $persentase = ($total_nomor_polis / $total_nomor_polis_all) * 100;
                    echo '<td style="width: 14.2857%; height: 22px;">' . number_format($persentase, 2, '.', ',') . '%</td>';

                    // Case by Client
                    $insured_name = array();
                    foreach ($result as $key => $value) {
                        if (strtolower($value['Provinsi']) == strtolower($provinsi) || strtolower($value['Provinsi 2']) == strtolower($provinsi)) {
                            $insured_name = array_merge($insured_name, explode(',', $value['Insured Name']));
                        }
                    }
                    $total_insured_name = count(array_unique($insured_name));
                    echo '<td style="width: 12.4714%; height: 22px;">' . number_format($total_insured_name, 0, '.', ',') . '</td>';

                    // % Case by Client
                    $persentase_insured_name = ($total_insured_name / $total_insured_name_all) * 100;
                    echo '<td style="width: 14.2857%; height: 22px;">' . number_format($persentase_insured_name, 2, '.', ',') . '%</td>';

                    // Total UP
                    $total_up_all = 0;
                    foreach ($result as $key => $value) {
                        if (strtolower($value['Provinsi']) == strtolower($provinsi) || strtolower($value['Provinsi 2']) == strtolower($provinsi)) {
                            $uang_pertanggungan = array_map('intval', explode(',', $value['UP']));
                            $total_up_all += array_sum($uang_pertanggungan);
                        }
                    }
                    echo '<td style="width: 12.4714%; height: 22px;">' . number_format($total_up_all, 0, '.', ',') . '</td>';

                    // % Total UP
                    $persentase_uang_pertanggungan = ($total_up_all / $total_up_all_all) * 100;
                    echo '<td style="width: 14.2857%; height: 22px;">' . number_format($persentase_uang_pertanggungan, 2, '.', ',') . '%</td>';
                    ?>
            </tr>
            <?php
            }
            ?>

            <tr style="height: 22px;">
                <td style="width: 16.1%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    Total</td>
                <td style="width: 12.4714%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    <?php echo number_format($total_nomor_polis_all, 0, '.', ','); ?>
                </td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    100%</td>
                <td style="width: 12.4714%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    <?php echo number_format($total_insured_name_all, 0, '.', ','); ?>
                </td>
                <td style="width: 14.2857%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    100%</td>
                <td style="width: 12.4714%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    <?php echo number_format($total_up_all, 0, '.', ','); ?>
                </td>
                <td style="width: 14.2857%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    100%</td>
            </tr>

            <!-- <tr style="height: 22px;">
                <td style="width: 16.1%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    Total</td>
                <td style="width: 12.4714%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    222</td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    100%</td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    186</td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    100%</td>
                <td style="width: 14.2857%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    100,218,032,243</td>
                <td style="width: 14.2857%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    100%</td>
            </tr> -->
        </tbody>
    </table>
    <p>&nbsp;</p>
    <div class="page-break"></div>

    <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
    <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
    </p>
    <p><strong>Top 3 wilayah dengan kasus terbanyak berdasarkan jumlah polis</strong></p>
    <ul>
        <?php
        $top3_polis = array();
        foreach ($result as $key => $value) {
            $provinsi = ucwords(strtolower($value['Provinsi']));
            if (isset($top3_polis[$provinsi])) {
                $top3_polis[$provinsi] += count(array_unique(explode(',', $value['Nomor Polis'])));
            } else {
                $top3_polis[$provinsi] = count(array_unique(explode(',', $value['Nomor Polis'])));
            }
        }
        arsort($top3_polis);
        $top3_polis = array_slice($top3_polis, 0, 3);
        foreach ($top3_polis as $provinsi => $total) {
            echo '<li>' . $provinsi . ', sebanyak ' . number_format($total, 0, '.', ',') . ' kasus (atau ' . number_format(($total / $total_nomor_polis_all) * 100, 2, '.', ',') . '% dari total ' . $total_nomor_polis_all . ' polis).</li>';
        }
        ?>
    </ul>
    <?php
    $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
    $sql = "SELECT * FROM analisa_top_wilayah WHERE id_top = '$id'";
    $top = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($top) > 0) {
        $counter = 2;
        while ($row = mysqli_fetch_assoc($top)) {
            echo "<p>" . nl2br(htmlspecialchars($row['top'])) . "</p>";
            $counter++;
        }
    } else {
        echo "<p>Tidak ada top yang ditemukan.</p>";
    }
    ?>

    <p><strong>&nbsp;2. Penerimaan Kasus Investigasi setiap bulannya selama periode Januari - Desember 2023</strong></p>
    <table style="border-collapse: collapse; width: 70%; height: 256px;" border="1">

        <tbody style="font-size: 15px;">
            <tr style="height: 18px;">
                <th style="width: 33.3333%; text-align: center; height: 18px;">Monthly Case</th>
                <th style="width: 33.3333%; text-align: center; height: 18px;">Cases</th>
                <th style="width: 33.3333%; text-align: center; height: 18px;">%Jumlah Case</th>
            </tr>
            <tr>
                <?php
                $bulan = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Oktober', 'November', 'Desember'];
                $total_insured_name_bulan = array_fill(0, 12, 0);
                foreach ($result as $key => $value) {
                    $total_insured_name_bulan[date('n', strtotime($value['Date Month'])) - 1] += 1;
                }
                foreach ($bulan as $key => $value) {
                    echo '<tr style="height: 18px;">';
                    echo '<td style="width: 33.3333%; height: 18px;">' . $value . '</td>';
                    echo '<td style="width: 33.3333%; height: 18px; text-align: center;">' . $total_insured_name_bulan[$key] . '</td>';
                    echo '<td style="width: 33.3333%; height: 18px; text-align: center;">' . number_format(($total_insured_name_bulan[$key] / $total_insured_name_all) * 100, 1, '.', ',') . '%</td>';
                    echo '</tr>';
                }
                ?>
            </tr>
        </tbody>
    </table>
    <ul>
        <?php
        // Koneksi ke database
        include 'koneksi.php';

        // Query untuk mendapatkan bulan dengan penerimaan polis terbanyak
        $sql = "SELECT 
    DATE_FORMAT(`Date Month`, '%Y-%m-01') AS `Date Month`, 
    COUNT(*) AS `Total`, 
    YEAR(`DateYear`) AS `dateyear`
FROM $tabel 
GROUP BY `Date Month`, dateyear  -- Menambahkan dateyear ke GROUP BY
ORDER BY `Total` DESC 
LIMIT 1";

        // Eksekusi query
        $result = mysqli_query($koneksi, $sql);

        // Cek apakah hasil query tidak kosong
        $date_month_terbanyak = mysqli_fetch_assoc($result);

        // Total semua polis yang diterima (untuk menghitung persentase)
        $sql_total = "SELECT COUNT(*) AS `TotalAll` FROM $tabel";
        $result_total = mysqli_query($koneksi, $sql_total);
        $total_insured_name_all = mysqli_fetch_assoc($result_total)['TotalAll'];

        ?>

        <p>1. Berdasarkan jumlah polis yang dimiliki oleh setiap nasabah adalah sebagai berikut:</p>
        <ul>
            Penerimaan Case terbanyak adalah di bulan
            <?php
            if ($date_month_terbanyak) {
                // Periksa apakah 'Date Month' dan 'Total' ada
                $date_month = $date_month_terbanyak['Date Month'];
                if ($date_month) {
                    echo date('F', strtotime($date_month));
                } else {
                    echo 'Data bulan tidak tersedia';
                }

                echo ' dengan ' . number_format($date_month_terbanyak['Total'], 0, '.', ',') . ' polis';

                // Menghitung persentase penerimaan terhadap total penerimaan
                $percentage = ($date_month_terbanyak['Total'] / $total_insured_name_all) * 100;
                echo ' atau ' . number_format($percentage, 1, '.', ',') . '%';

                // Menampilkan tahun dari kolom 'dateyear' di database
                if (isset($date_month_terbanyak['dateyear']) && !empty($date_month_terbanyak['dateyear'])) {
                    echo ' dari total penerimaan polis di tahun ' . $date_month_terbanyak['dateyear'];
                } else {
                    echo ' dari total penerimaan polis di tahun tidak tersedia';
                }
            } else {
                echo 'Data tidak tersedia.';
            }
            ?>.
        </ul>


        <ul>
            <?php
            // Query untuk mendapatkan data tambahan (misalnya untuk nomor polis dan provinsi)
            $sql_detail = "SELECT `Date Month`, `Nomor Polis`, `Provinsi`, `UP` FROM $tabel"; // Ambil semua data yang diperlukan
            $result_detail = mysqli_query($koneksi, $sql_detail);

            // Memproses jumlah entri per bulan
            $result_array = [];
            $total_entries_all = 0; // Variabel untuk menghitung total entri

            while ($item = mysqli_fetch_assoc($result_detail)) {
                if (isset($item['Date Month'])) {
                    // Menghitung total entri per bulan
                    if (!isset($result_array[$item['Date Month']])) {
                        $result_array[$item['Date Month']] = 0;
                    }
                    $result_array[$item['Date Month']] += 1; // Tambah 1 untuk setiap entri
                    $total_entries_all++; // Menghitung total semua entri
                }
            }

            // Menemukan bulan dengan jumlah entri terendah
            $min_date_month_terendah = array_keys($result_array, min($result_array))[0]; // Mendapatkan kunci (bulan) dengan nilai terendah
            $min_total_entries = min($result_array); // Mendapatkan nilai terendah

            // Menampilkan hasil
            echo '<li>Bulan dengan jumlah polis terendah adalah ' . $min_date_month_terendah .
                ' dengan total ' . number_format($min_total_entries, 0, ',', '.') . ' polis (' .
                number_format(($min_total_entries / $total_entries_all) * 100, 1, '.', ',') .
                '% dari total keseluruhan polis).</li>';
            ?>


        </ul>

        <p>2. Adapun top 3 wilayah dengan Total Uang Pertanggungan terbesar adalah sebagai berikut:</p>
        <ul>
            <?php
            // Reset pointer result detail
            mysqli_data_seek($result_detail, 0); // Kembali ke awal hasil untuk digunakan kembali

            // Memproses total Uang Pertanggungan per Provinsi
            $result_array = [];
            while ($item = mysqli_fetch_assoc($result_detail)) {
                if (isset($item['Provinsi']) && isset($item['UP'])) {
                    if (!isset($result_array[$item['Provinsi']])) {
                        $result_array[$item['Provinsi']] = 0;
                    }
                    $result_array[$item['Provinsi']] += (int)$item['UP'];
                }
            }
            arsort($result_array);
            $top3_provinsi = array_slice($result_array, 0, 3, true);
            $total_up_all = array_sum($result_array); // Hitung total Uang Pertanggungan untuk persentase

            foreach ($top3_provinsi as $provinsi => $total_uang_pertanggungan) {
                echo '<li>' . $provinsi . ' dengan total UP Rp ' . number_format($total_uang_pertanggungan, 0, ',', '.') . ' (' . number_format(($total_uang_pertanggungan / $total_up_all) * 100, 1, '.', ',') . '% dari total keseluruhan UP).</li>';
            }
            ?>

        </ul>
        <div class="page-break"></div>

        <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <p><strong>2. INVESTIGASI BERDASARKAN JENIS KLAIM</strong></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>

        <?php
        // Tentukan tabel berdasarkan nama client
        $client_name = $client['name'];
        if ($client_name == 'PT Asuransi Allianz Indonesia') {
            $tabel = 'allianz';
        } elseif ($client_name == 'PT. MSIG Insurance Life') {
            $tabel = 'msig';
        } elseif ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
            $tabel = 'generali';
        } else {
            die('client_name tidak ditemukan');
        }

        // Query untuk mendapatkan data
        $sql = "SELECT `Claim Type` FROM $tabel";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil) {
            die('Query error: ' . mysqli_error($koneksi));
        }

        // Data untuk chart
        $data_chart = array();
        while ($baris = mysqli_fetch_assoc($hasil)) {
            if (isset($baris['Claim Type'])) {
                $claim_type = trim($baris['Claim Type']);
                if (!isset($data_chart[$claim_type])) {
                    $data_chart[$claim_type] = 1;
                } else {
                    $data_chart[$claim_type] += 1;
                }
            }
        }

        // Ambil nama Claim Type sebagai kategori xAxis
        $jenis_claim = array_keys($data_chart);

        // Format data untuk chart
        $chart_data = array_map(function ($claim_type) use ($data_chart) {
            return [
                'name' => $claim_type,
                'y' => (int)$data_chart[$claim_type],
                'color' => array(
                    'TPD' => '#FF0000',
                    'HS' => '#00FF00',
                    'DC' => '#0000FF',
                    'CI' => '#FFFF00'
                )[$claim_type] ?? '#808080'
            ];
        }, $jenis_claim);

        // Konversi ke JSON untuk penggunaan di JavaScript
        $chart_data_json = json_encode($chart_data);
        ?>

        <!-- Chart Container -->
        <div id="container" style="width:100%; height:500px;"></div>
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                type: 'bar', // Ubah dari 'bar' menjadi 'column' agar grafiknya vertikal
                backgroundColor: '#D3D3D3' // Sesuaikan warna latar belakang
            },
            title: {
                text: 'Jenis Klaim Yang Diinvestigasi (Cases)'
            },
            xAxis: {
                categories: <?php echo json_encode($jenis_claim); ?>, // Tampilkan Claim Type di sumbu x
                title: {
                    text: 'Claim Type'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Kasus',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: true
                    },
                    pointPadding: 0.2, // Jarak antar kolom
                    pointPlacement: 'on' // Posisikan setiap kategori pada kolom
                }
            },
            legend: {
                reversed: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Cases',
                data: <?php echo $chart_data_json; ?> // Gunakan data yang sudah diformat
            }]
        });
        </script>


        <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #2f4f6e;
            color: white;
        }

        td {
            background-color: #f4f7fa;
        }

        tfoot td {
            background-color: #2f4f6e;
            color: white;
            font-weight: bold;
        }
        </style>
        </head>

        <body>

            <h2>Claim Type Summary</h2>
            <table>
                <thead>
                    <tr>
                        <th>Claim Type</th>
                        <th>Cases</th>
                        <th>%Cases</th>
                        <th>Total UP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $client_name = $client['name'];
                    if ($client_name == 'PT Asuransi Allianz Indonesia') {
                        $tabel = 'allianz';
                    } else if ($client_name == 'PT. MSIG Insurance Life') {
                        $tabel = 'msig';
                    } else if ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
                        $tabel = 'generali';
                    } else {
                        die('client_name tidak ditemukan');
                    }

                    $sql = "SELECT * FROM $tabel";
                    $hasil = mysqli_query($koneksi, $sql);
                    if (!$hasil) {
                        die('Query error: ' . mysqli_error($koneksi));
                    }

                    $hasilArray = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

                    // Memastikan bahwa data ada di dalam $hasilArray
                    if (empty($hasilArray)) {
                        echo "Data tidak ditemukan.";
                    } else {
                        $claimType = array();
                        $totalUP = array();

                        // Memproses data yang sudah dikonversi menjadi array
                        foreach ($hasilArray as $value) {
                            // Ambil 'Claim Type' dari setiap baris
                            $claimTypeName = $value['Claim Type'];

                            // Cek apakah 'UP' kosong, jika kosong gunakan 'Klaim Yang Diajukan'
                            $upValue = !empty($value['UP']) ? (int) $value['UP'] : (int) $value['Klaim Yang Diajukan'];

                            // Jika 'Claim Type' belum ada di array, tambahkan
                            if (!isset($claimType[$claimTypeName])) {
                                $claimType[$claimTypeName] = 1;
                                $totalUP[$claimTypeName] = $upValue;
                            } else {
                                // Jika sudah ada, tambahkan jumlahnya
                                $claimType[$claimTypeName] += 1;
                                $totalUP[$claimTypeName] += $upValue;
                            }
                        }

                        // Menampilkan hasil
                        foreach ($claimType as $key => $value) {
                            // Hitung persentase dari total data
                            $persentase = (count($hasilArray) > 0) ? ($value / count($hasilArray)) * 100 : 0;

                            // Tampilkan baris tabel
                            echo "<tr>";
                            echo "<td>" . $key . "</td>";
                            echo "<td>" . $value . "</td>";
                            echo "<td>" . number_format($persentase, 2, '.', ',') . "%</td>";
                            echo "<td>" . number_format($totalUP[$key], 0, '.', ',') . "</td>";
                            echo "</tr>";
                        }
                    }

                    ?>




                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td><?php echo array_sum($claimType); ?></td>
                        <td><?php echo number_format((array_sum($claimType) / count($hasilArray)) * 100, 2, '.', ',') . "%"; ?>
                        </td>
                        <td><?php echo number_format(array_sum($totalUP), 0, '.', ','); ?></td>
                    </tr>
                </tfoot>
            </table>
            <p><strong>Analisa:</strong></p>
            <p>Adapun jenis klaim yang telah dilakukan investigasi berdasarkan jumlah polis adalah sebagai berikut:</p>
            <p>&nbsp;</p>
            <ol>
                <?php
                // Contoh koneksi ke database
                $mysqli = new mysqli("localhost", "root", "", "sistematisasi");

                // Memastikan koneksi berhasil
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Melakukan query
                $client_name = $client['name'];
                if ($client_name == 'PT Asuransi Allianz Indonesia') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG Insurance Life') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
                    $tabel = 'generali';
                } else {
                    die('client_name tidak ditemukan');
                }

                $sql = "SELECT * FROM $tabel";
                $hasil = mysqli_query($koneksi, $sql);
                if (!$hasil) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                // Memeriksa apakah query berhasil
                if ($hasil) {
                    // Mengubah hasil query menjadi array
                    $data = [];
                    while ($row = $hasil->fetch_assoc()) {
                        $data[] = $row;
                    }

                    // Jumlah total polis
                    $jumlahPolis = count($data);
                    $jenisKlaim = array_count_values(array_column($data, 'Claim Type'));
                    arsort($jenisKlaim); // Mengurutkan jenis klaim berdasarkan jumlah

                    // Daftar klaim spesifik
                    $klaimTypes = ['DC' => 'Klaim Meninggal (DC)', 'HS' => 'Hospital (HS)', 'CI' => 'Klaim Critical Illness (CI)', 'TPD' => 'Klaim TPD'];

                    // Menampilkan hasil
                    foreach ($klaimTypes as $type => $label) {
                        // Hitung jumlah klaim untuk tipe ini
                        $jumlahKlaim = isset($jenisKlaim[$type]) ? $jenisKlaim[$type] : 0;
                        $persentase = number_format(($jumlahKlaim / $jumlahPolis) * 100, 2, '.', ',');

                        echo "$label sebanyak $jumlahKlaim Polis (atau $persentase% dari total $jumlahPolis Polis).<br>";
                    }

                    // Kesimpulan berdasarkan jenis klaim terbanyak
                    $jenisKlaimTerbanyak = key($jenisKlaim); // Mendapatkan kunci dari jenis klaim dengan jumlah terbanyak
                    $jumlahTerbanyak = $jenisKlaim[$jenisKlaimTerbanyak];
                    $persentaseTerbanyak = number_format(($jumlahTerbanyak / $jumlahPolis) * 100, 2, '.', ',');

                    // Menampilkan kesimpulan
                    echo "Dari informasi tersebut dapat ditarik kesimpulan jika kasus klaim paling banyak adalah " .
                        "$klaimTypes[$jenisKlaimTerbanyak], yaitu $persentaseTerbanyak% dari total Polis yang dilakukan investigasif.";

                    // Menutup hasil
                    $hasil->free();
                } else {
                    echo "Query error: " . $mysqli->error;
                }

                // Menutup koneksi
                $mysqli->close();
                ?>
                <div class="page-break"></div>

                <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <p><strong>3. TURN AROUND TIME (TAT)</strong></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/series-label.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <h2>TAT Investigasi (Days)</h2>
                <div id="tatChart" style="width:100%; height:230px;"></div>

                <h2>SLA Investigasi (Policy Level)</h2>
                <div id="slaChart" style="width:100%; height:230px;"></div>


                <!-- Bagian JavaScript untuk Chart -->
                <?php
                // Query untuk mengambil kolom 'Claim Type' dan 'TAT' dari tabel
                $sql = "SELECT `Claim Type`, `TAT` FROM $tabel";
                $result = mysqli_query($koneksi, $sql);

                if (!$result) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                // Array untuk menyimpan total TAT dan jumlah data TAT per Claim Type
                $tatData = [];
                $tatCounts = [];

                // Mengumpulkan total TAT dan jumlah data untuk setiap Claim Type
                while ($row = mysqli_fetch_assoc($result)) {
                    $claimType = $row['Claim Type'];
                    $tatValue = (int)$row['TAT']; // Konversi nilai TAT menjadi integer

                    // Menginisialisasi array jika Claim Type belum ada
                    if (!isset($tatData[$claimType])) {
                        $tatData[$claimType] = $tatValue;   // Total TAT untuk Claim Type
                        $tatCounts[$claimType] = 1;         // Hitungan TAT untuk Claim Type
                    } else {
                        $tatData[$claimType] += $tatValue;  // Tambahkan nilai TAT untuk Claim Type yang sama
                        $tatCounts[$claimType]++;           // Tambah jumlah TAT
                    }
                }

                // Mendapatkan Claim Types untuk sumbu x
                $claimTypes = array_keys($tatData);

                // Menghitung rata-rata TAT untuk setiap Claim Type
                $tatAchievementData = [];
                foreach ($claimTypes as $claimType) {
                    $tatAchievementData[] = ($tatCounts[$claimType] > 0) ? (int)($tatData[$claimType] / $tatCounts[$claimType]) : 0; // Rata-rata TAT per Claim Type sebagai integer
                }

                // Menghitung rata-rata keseluruhan untuk garis TAT Average
                $averageTatAchievement = (count($tatAchievementData) > 0) ? (int)(array_sum($tatAchievementData) / count($tatAchievementData)) : 0;
                $tatAverageData = array_fill(0, count($claimTypes), $averageTatAchievement);

                // Mengonversi data ke format JSON untuk digunakan di JavaScript
                $claimTypesJSON = json_encode($claimTypes);
                $tatAchievementDataJSON = json_encode($tatAchievementData);
                $tatAverageDataJSON = json_encode($tatAverageData);
                ?>

                <!-- Kode HTML dan JavaScript untuk Grafik -->
                <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', function() {
                    Highcharts.chart('tatChart', {
                        chart: {
                            type: 'column',
                            backgroundColor: '#d3d3d3'
                        },
                        title: {
                            text: 'TAT Investigasi (Days)'
                        },
                        xAxis: {
                            categories: <?php echo $claimTypesJSON; ?>,
                            crosshair: true
                        },
                        yAxis: [{
                            min: 0,
                            title: {
                                text: 'Days'
                            }
                        }],
                        legend: {
                            align: 'center',
                            verticalAlign: 'top',
                            y: 20
                        },
                        plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true
                                }
                            }
                        },
                        series: [{
                            name: 'TAT Achievement (Days)',
                            data: <?php echo $tatAchievementDataJSON; ?>,
                            color: '#1f78b4'
                        }, {
                            name: 'TAT Average',
                            type: 'line',
                            data: <?php echo $tatAverageDataJSON; ?>,
                            color: 'red',
                            marker: {
                                enabled: false
                            }
                        }, {
                            name: 'SLA',
                            type: 'line',
                            data: [14, 14, 14, 14],
                            color: 'yellow',
                            dashStyle: 'Dash',
                            marker: {
                                enabled: false
                            }
                        }]
                    });
                });
                </script>



                <?php
                // Tentukan tabel berdasarkan client name
                $client_name = $client['name'];
                if ($client_name == 'PT Asuransi Allianz Indonesia') {
                    $tabel = 'allianz';
                } elseif ($client_name == 'PT. MSIG Insurance Life') {
                    $tabel = 'msig';
                } elseif ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
                    $tabel = 'generali';
                } else {
                    die('client_name tidak ditemukan');
                }

                // Query untuk mendapatkan data TAT Completed dari tabel
                $sql = "SELECT `TAT Completed` FROM $tabel";
                $result = mysqli_query($koneksi, $sql);
                if (!$result) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                // Inisialisasi variabel untuk menghitung jumlah kategori
                $under14Days = 0;
                $over14Days = 0;
                $totalCount = 0; // Untuk menghitung jumlah total TAT Completed

                // Loop untuk memisahkan data kategori berdasarkan nilai TAT Completed
                while ($row = mysqli_fetch_assoc($result)) {
                    $tatCompleted = $row['TAT Completed']; // Ambil nilai TAT Completed
                    $totalCount++; // Menambah total count

                    // Menambahkan ke kategori berdasarkan nilai 'TAT Completed'
                    if ($tatCompleted === 'Under 14 Days') {
                        $under14Days++;
                    } elseif ($tatCompleted === 'Over 14 Days') {
                        $over14Days++;
                    }
                }

                // Menghitung rata-rata SLA untuk setiap kategori
                $averageSLA = ($totalCount > 0) ? (int)(($under14Days + $over14Days) / $totalCount * 14) : 0;
                $averageSLAData = array_fill(0, 2, $averageSLA); // Mengisi nilai rata-rata SLA untuk setiap kategori

                // Menyusun data untuk chart
                $categories = ['14 days', 'More than 14 days'];
                $dataChart = [$under14Days, $over14Days];

                // Mengonversi data ke format JSON untuk digunakan di JavaScript
                $categoriesJSON = json_encode($categories);
                $dataChartJSON = json_encode($dataChart);
                $averageSLADataJSON = json_encode($averageSLAData);
                ?>

                <script type="text/javascript">
                // Chart 2: SLA Investigasi (Policy Level)
                Highcharts.chart('slaChart', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'SLA Investigasi (Policy Level)'
                    },
                    xAxis: {
                        categories: <?php echo $categoriesJSON; ?>,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Cases'
                        }
                    },
                    series: [{
                        name: 'Cases',
                        data: <?php echo $dataChartJSON; ?>,
                        color: '#1f78b4'
                    }, {
                        name: 'SLA Average',
                        type: 'line',
                        data: <?php echo $averageSLADataJSON; ?>,
                        color: 'red',
                        marker: {
                            enabled: true
                        },
                        dashStyle: 'Dash'
                    }]
                });
                </script>

                <table>
                    <thead>
                        <tr>
                            <th>TAT</th>
                            <th>Case</th>
                            <th>Average SLA (Days)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Query untuk mengambil semua data dari tabel
                        $sql = "SELECT `TAT Completed` FROM $tabel";
                        $result = mysqli_query($koneksi, $sql);

                        if (!$result) {
                            die('Query error: ' . mysqli_error($koneksi));
                        }

                        // Variabel untuk menghitung jumlah kasus dan total hari
                        $under14DaysCount = 0;
                        $over14DaysCount = 0;
                        $totalTATCompleted = 0;
                        $totalDaysUnder14 = 0;
                        $totalDaysOver14 = 0;

                        // Iterasi untuk menghitung data sesuai kriteria
                        while ($row = mysqli_fetch_assoc($result)) {
                            $tatCompleted = $row['TAT Completed'];
                            $totalTATCompleted++;

                            if ($tatCompleted === 'Under 14 Days') {
                                $under14DaysCount++;
                                $totalDaysUnder14 += 14; // Mengasumsikan 14 hari untuk setiap kasus 'Under 14 Days'
                            } elseif ($tatCompleted === 'Over 14 Days') {
                                $over14DaysCount++;
                                $totalDaysOver14 += 15; // Menambahkan nilai hari untuk 'Over 14 Days' (dapat disesuaikan)
                            }
                        }

                        // Hitung rata-rata hari untuk "Under 14 Days" dan "Over 14 Days"
                        $under14DaysAverage = ($under14DaysCount > 0) ? round($totalDaysUnder14 / $under14DaysCount) : 0;
                        $over14DaysAverage = ($over14DaysCount > 0) ? round($totalDaysOver14 / $over14DaysCount) : 0;
                        ?>

                        <tr>
                            <td>Under 14 Days</td>
                            <td><?php echo $under14DaysCount; ?></td>
                            <td><?php echo $under14DaysAverage; ?> Days</td>
                        </tr>
                        <tr>
                            <td>Over 14 Days</td>
                            <td><?php echo $over14DaysCount; ?></td>
                            <td><?php echo $over14DaysAverage; ?> Days</td>
                        </tr>
                    </tbody>
                </table>

                <p><strong>Analisa:</strong></p>
                <?php
                // Tentukan tabel berdasarkan client name
                $client_name = $client['name'];
                if ($client_name == 'PT Asuransi Allianz Indonesia') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG Insurance Life') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
                    $tabel = 'generali';
                } else {
                    die('client_name tidak ditemukan');
                }

                // Query to count distinct Nomor Polis
                $sql_polis_count = "SELECT COUNT(DISTINCT `Nomor Polis`) AS total_polis FROM $tabel";
                $result_polis_count = mysqli_query($koneksi, $sql_polis_count);

                if (!$result_polis_count) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                $row_polis_count = mysqli_fetch_assoc($result_polis_count);
                $total_polis = $row_polis_count['total_polis'];

                // Query to calculate average TAT per claim type
                $sql = "SELECT `Claim Type`, AVG(tat) AS avg_tat FROM $tabel GROUP BY `Claim Type`";
                $result = mysqli_query($koneksi, $sql);

                if (!$result) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                // Initialize variables to store TAT values
                $tat_data = [
                    'CI' => 0,
                    'DC' => 0,
                    'HS' => 0,
                    'TPD' => 0
                ];

                // Fetch data and assign it to the respective claim type
                while ($row = mysqli_fetch_assoc($result)) {
                    switch ($row['Claim Type']) {
                        case 'CI':
                            $tat_data['CI'] = round($row['avg_tat']);
                            break;
                        case 'DC':
                            $tat_data['DC'] = round($row['avg_tat']);
                            break;
                        case 'HS':
                            $tat_data['HS'] = round($row['avg_tat']);
                            break;
                        case 'TPD':
                            $tat_data['TPD'] = round($row['avg_tat']);
                            break;
                    }
                }
                ?>

                <!-- Display data in HTML as requested -->
                <ol>
                    <li>Rata-rata TAT untuk <?php echo $total_polis; ?> polis adalah selama
                        <?php echo round(array_sum($tat_data) / 4); ?> hari kalender sebagai berikut:</li>
                </ol>
                <ul>
                    <li>Klaim critical illness (CI) selama <?php echo $tat_data['CI']; ?> hari kalender.</li>
                    <li>Klaim meninggal (DC) selama <?php echo $tat_data['DC']; ?> hari kalender.</li>
                    <li>Klaim HS (Hospital) selama <?php echo $tat_data['HS']; ?> hari kalender.</li>
                    <li>Klaim TPD selama <?php echo $tat_data['TPD']; ?> hari kalender.</li>
                </ul>

                <p>&nbsp;</p>

                <?php
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $sql = "SELECT * FROM analisa_tat WHERE id_tat = '$id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $counter = 2;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>$counter. " . nl2br(htmlspecialchars($row['tat'])) . "</p>";
                        $counter++;
                    }
                } else {
                    echo "<p>Tidak ada tat yang ditemukan.</p>";
                }
                ?>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="page-break"></div>
                <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <p><strong>4. HASIL INVESTIGASI</strong></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                <div id="chart2" style="width:100%; height:400px;"></div>
                <?php
                // Koneksi ke database
                include 'koneksi.php';

                // Query untuk mengambil data dari field 'result'
                $client_name = $client['name'];
                if ($client_name == 'PT Asuransi Allianz Indonesia') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG Insurance Life') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
                    $tabel = 'generali';
                } else {
                    die('client_name tidak ditemukan');
                }

                $sql = "SELECT result, COUNT(*) as cases_count FROM $tabel GROUP BY result";
                $temuan = mysqli_query($koneksi, $sql);
                if (!$temuan) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                // Inisialisasi variabel untuk kategori dan data
                $categories = array();
                $data_cases = array();
                $data_percent = array();

                // Memasukkan data dari database ke array
                $total_cases = 0;
                while ($row = mysqli_fetch_assoc($temuan)) {
                    $categories[] = $row['result'];
                    $data_cases[] = (int)$row['cases_count'];  // Cast ke integer
                    $total_cases += $row['cases_count'];       // Hitung total untuk persentase
                }

                // Perhitungan persentase
                foreach ($data_cases as $count) {
                    $data_percent[] = round(($count / $total_cases) * 100, 2); // Hitung persentase
                }
                ?>

                <script>
                Highcharts.chart('chart2', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Temuan Investigasi'
                    },
                    xAxis: {
                        categories: <?php echo json_encode($categories); ?> // Data dari PHP
                    },
                    yAxis: [{
                        min: 0,
                        title: {
                            text: 'Cases'
                        }
                    }, {
                        title: {
                            text: '% Cases'
                        },
                        opposite: true
                    }],
                    series: [{
                        name: 'Cases',
                        type: 'column',
                        data: <?php echo json_encode($data_cases); ?> // Data dari PHP
                    }, {
                        name: '% Cases',
                        type: 'spline',
                        yAxis: 1,
                        data: <?php echo json_encode($data_percent); ?>, // Data persentase dari PHP
                        tooltip: {
                            valueSuffix: '%'
                        }
                    }]
                });
                </script>
                <p><strong><u>Temuan Investigasi </u></strong></p>
                <p><strong>Analisa:</strong></p>
                <?php
                // Koneksi ke database
                include 'koneksi.php';

                // Query untuk mendapatkan total nomor polis
                $sql_total = "SELECT COUNT(*) AS TotalPolis FROM $tabel"; // Gantilah '$tabel' dengan nama tabel Anda
                $result_total = mysqli_query($koneksi, $sql_total);
                $total_nomor_polis_all = mysqli_fetch_assoc($result_total)['TotalPolis'];

                // Query untuk mendapatkan data dari kolom 'Result'
                $sql_result = "SELECT Result FROM $tabel"; // Gantilah '$tabel' dengan nama tabel Anda
                $result = mysqli_query($koneksi, $sql_result);

                // Menghitung jumlah kasus berdasarkan nilai 'Result'
                $result_array = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $result_name = $row['Result'];
                    $result_array[$result_name] = isset($result_array[$result_name]) ? $result_array[$result_name] + 1 : 1;
                }

                // Tampilan bagian pertama
                echo "<ol>";
                echo "<li>Adapun temuan hasil investigasi berdasarkan jumlah polis, diperoleh data sebagai berikut:</li>";
                echo "</ol>";
                echo "<ul>";

                foreach ($result_array as $result_name => $total) {
                    echo '<li>' . $result_name . ' sebanyak ' . $total . ' kasus (atau ' . number_format(($total / $total_nomor_polis_all) * 100, 2, '.', ',') . '% dari total ' . $total_nomor_polis_all . ' polis).</li>';
                }

                echo "</ul>";
                echo "<br>";

                // Menampilkan bagian kedua
                // Query untuk mendapatkan total nasabah dan polis
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $sql = "SELECT * FROM analisa_hasil_investigasi WHERE id_hasil_investigasi = '$id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<ol start='2'>";
                        echo "<li>" . nl2br(htmlspecialchars($row['hasil_investigasi'])) . "</li>";
                        echo "</ol>";
                    }
                } else {
                    echo "<p>Tidak ada hasil_investigasi yang ditemukan.</p>";
                }
                ?>

            </ol>
            <div class="page-break"></div>

            <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p><strong><u>Sebaran Wilayah Hasil Investigasi dengan temuan Per Kategori</u></strong></p>
            <div id="chart1" style="width:100%; height:400px;"></div>

            <?php
            // Koneksi ke database
            include 'koneksi.php';

            // Query untuk mengambil semua provinsi dari database
            $sql_provinsi = "SELECT DISTINCT provinsi FROM $tabel";
            $result_provinsi = mysqli_query($koneksi, $sql_provinsi);

            if (!$result_provinsi) {
                die('Query error: ' . mysqli_error($koneksi));
            }

            // Inisialisasi array provinsi
            $provinsi = array();

            // Mengisi array provinsi dengan data dari query
            while ($row = mysqli_fetch_assoc($result_provinsi)) {
                $provinsi[] = $row['provinsi'];
            }

            // Cek jika tidak ada data provinsi ditemukan
            if (empty($provinsi)) {
                die('Tidak ada data provinsi yang ditemukan.');
            }

            // Kategori temuan yang ingin diambil dari database (kategori dinamis)
            $sql_categories = "SELECT DISTINCT result FROM $tabel";
            $result_categories = mysqli_query($koneksi, $sql_categories);

            if (!$result_categories) {
                die('Query error: ' . mysqli_error($koneksi));
            }

            // Inisialisasi array untuk kategori temuan
            $categories = array();

            // Mengisi array kategori temuan dengan data dari query
            while ($row = mysqli_fetch_assoc($result_categories)) {
                $categories[] = $row['result'];
            }

            // Inisialisasi data series untuk setiap kategori secara dinamis
            $data_series = array();
            foreach ($categories as $category) {
                $data_series[$category] = array_fill(0, count($provinsi), 0);
            }

            // Query untuk mengambil data sesuai dengan provinsi dan kategori temuan
            foreach ($categories as $category) {
                $sql = "SELECT provinsi, COUNT(*) as cases_count FROM $tabel WHERE result = '$category' GROUP BY provinsi";
                $result = mysqli_query($koneksi, $sql);

                if (!$result) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    $provinsi_index = array_search($row['provinsi'], $provinsi); // Temukan index provinsi
                    if ($provinsi_index !== false) {
                        $data_series[$category][$provinsi_index] = (int)$row['cases_count']; // Simpan jumlah kasus
                    }
                }
            }

            // Hitung total kasus per provinsi untuk kategori total
            $total_cases = array();
            for ($i = 0; $i < count($provinsi); $i++) {
                $total_cases[$i] = 0;
                foreach ($categories as $category) {
                    $total_cases[$i] += $data_series[$category][$i];
                }
            }
            ?>

            <!-- Bagian JavaScript untuk Highcharts -->
            <script>
            Highcharts.chart('chart1', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Sebaran Area dengan Temuan per Kategori'
                },
                xAxis: {
                    categories: <?php echo json_encode($provinsi); ?>, // Kategori provinsi dari PHP
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Number of Cases'
                    }
                },
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'top'
                },
                plotOptions: {
                    series: {
                        grouping: false, // Memisahkan setiap temuan
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                series: [
                    <?php
                        // Menghasilkan series data secara dinamis
                        foreach ($categories as $category) {
                            echo "{
                    name: '" . $category . "',
                    data: " . json_encode($data_series[$category]) . ",
                    pointPadding: 0.2, // Jarak antar kolom
                    pointPlacement: 'on' // Posisikan setiap kategori pada kolom
                },";
                        }
                        ?> {
                        name: 'Total',
                        type: 'line',
                        color: '#000000', // Warna hitam untuk total
                        data: <?php echo json_encode($total_cases); ?>, // Data total kasus
                        marker: {
                            enabled: true,
                            radius: 3
                        }
                    }
                ]
            });
            </script>


            <p><strong>Analisa:</strong></p>
            <?php
            $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
            $sql = "SELECT * FROM analisa_sebaran_wilayah_hasil_investigasi WHERE id_analisa = '$id'";
            $result = mysqli_query($koneksi, $sql);

            if (mysqli_num_rows($result) > 0) {
                $counter = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p><strong>$counter.</strong> " . nl2br(htmlspecialchars($row['analisa'])) . "</p>";
                    $counter++;
                }
            } else {
                echo "<p>Tidak ada analisa yang ditemukan.</p>";
            }
            ?>
            <p>&nbsp;</p>
            <!-- <div class="page-break"></div>

            <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <ol start="3">
                <li><strong>Hasil investigasi klaim dengan temuan Batal Polis</strong></li>
            </ol>
            <p>Berdasarkan 2 kasus Fraud diperoleh data informasi sebagai berikut:</p>

            <ul>
                <li>Ahli waris mengakui bahwa terdapat ketidakbenaran dalam memberikan informasi mengenai tempat
                    kematian
                    Tertanggung, dimana pada saat pengajuan klaim Tertanggung</li>
                <li>dinyatakan meninggal di Pasaman Barat, namun dari hasil investigasi diketahui Tertanggung
                    meninggal
                    di
                    Nias.</li>
                <li>Nasabah membatalkan polis karena merasa proses klaim di Asuransi Allianz yang lama dan meminta
                    untuk
                    klaim yang sudah diajukan dapat dibayarkan.</li>
            </ul>
            <p>&nbsp;</p>
            <ol>
                <li><strong>Hasil investigasi klaim dengan Hasil Case Closed</strong></li>
            </ol>
            <ul>
                <li>Proses investigasi dihentikan (case closed) sehubungan dengan nasabah tidak berhasil ditemui dan
                    nomor
                    telepon tidak berhasil dihubungi</li>
                <li>Rumah sakit mensyaratkan adanya Surat Kuasa asli dari Nasabah, dimana dalam hal inj sesuai
                    dengan
                    permintaan dari Asuransi Allianz nasabah tidak diperkenankan untuk ditemui.</li>
            </ul>
            <p>&nbsp;</p>
            <ol start="2">
                <li><strong>Hasil investigasi klaim dengan Hasil No Finding</strong></li>
            </ol>
            <ul>
                <li>Berdasarkan hasil investigasi ke berbagai pihak baik pada fasilitas kesehatan, institusi
                    pemerintah
                    serta hasil wawancara, tidak ditemukan data medis sebelum polis diterbitkan yang bersifat
                    material.
                </li>
                <li>Dari sisi financial background telah sesuai baik informasi di dalam SPAJ dan temuan di lapangan,
                    dalam
                    hal ini pembayar premi memiliki kemampuan untuk membeli dan membayarkan premi.</li>
                <li>Tidak terdapat indikasi fraud baik dalam proses penutupan polis maupun pengajuan klaim. Tidak
                    ada
                    kejanggalan apapun pada saat melakukan wawancara dengan nasabah dimana semua informasi dapat
                    dijawab
                    dengan baik dan lancar serta dapat menunjukan bukti-bukti yang ditanyakan oleh investigator.
                </li>
            </ul> -->
            <div class="page-break"></div>

            <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p>UANG PERTANGGUNGAN</p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p><strong>Total uang pertanggungan untuk seluruh kasus Investigasi</strong></p>
            <p>&nbsp;</p>
            <style>
            table {
                width: 60%;
                border-collapse: collapse;
                margin: 20px 0;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 8px 12px;
                text-align: center;
            }

            th {
                background-color: #2f4f6e;
                color: white;
            }

            td {
                background-color: #f4f7fa;
            }

            tfoot td {
                background-color: #2f4f6e;
                color: white;
                font-weight: bold;
            }
            </style>
            </head>

            <body>

                <h2>Hasil Investigasi</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Hasil Investigasi</th>
                            <th>Sum of UP Idr</th>
                            <th>%</th>
                            <th>Total UP</th>
                            <th>Dari Total</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetching the correct table based on client name
                        $client_name = $client['name'];
                        if ($client_name == 'PT Asuransi Allianz Indonesia') {
                            $tabel = 'allianz';
                        } else if ($client_name == 'PT. MSIG Insurance Life') {
                            $tabel = 'msig';
                        } else if ($client_name == 'PT. Asuransi Jiwa Generali Indonesia') {
                            $tabel = 'generali';
                        } else {
                            die('client_name tidak ditemukan');
                        }

                        // SQL query to fetch data from the selected table
                        $sql = "SELECT * FROM $tabel";
                        $result = mysqli_query($koneksi, $sql);
                        if (!$result) {
                            die('Query error: ' . mysqli_error($koneksi));
                        }

                        // Initialize arrays to hold total UP for each result type
                        $total_up_by_result = [];
                        $total_up_all = 0;

                        // Loop through the result set to accumulate UP values
                        while ($value = mysqli_fetch_assoc($result)) {
                            // Ensure 'UP', 'Klaim Yang Diajukan', and 'Result' fields exist and are not null
                            if (
                                isset($value['UP']) && isset($value['Klaim Yang Diajukan']) && isset($value['Result']) &&
                                !empty($value['Result'])
                            ) {

                                // Convert 'UP' and 'Klaim Yang Diajukan' to integers, treating empty strings as 0
                                $up = !empty($value['UP']) ? intval($value['UP']) : 0;
                                $klaim = !empty($value['Klaim Yang Diajukan']) ? intval($value['Klaim Yang Diajukan']) : 0;

                                // Accumulate UP and Klaim
                                $total_up = $up + $klaim;
                                $total_up_all += $total_up; // Total UP for all results

                                // Get the result type
                                $result_type = strtolower(trim($value['Result']));

                                // Initialize the result type if not already done
                                if (!isset($total_up_by_result[$result_type])) {
                                    $total_up_by_result[$result_type] = 0;
                                }

                                // Accumulate UP for this result type
                                $total_up_by_result[$result_type] += $total_up;
                            }
                        }

                        // Display the table with the calculated UP for each result type
                        foreach ($total_up_by_result as $result_type => $total_up) {
                            // Calculate percentage for this result type
                            if ($total_up_all > 0) {
                                $percentage = ($total_up / $total_up_all) * 100;
                            } else {
                                $percentage = 0;
                            }

                            echo '<tr>';
                            echo '<td>' . ucfirst($result_type) . '</td>'; // Display result type
                            echo '<td>' . number_format($total_up, 0, ',', '.') . '</td>'; // Total UP for this result type
                            echo '<td>' . number_format($percentage, 2, '.', ',') . '%</td>'; // Percentage
                            echo '<td><span style="white-space: nowrap;">' . number_format($total_up_all, 0, ',', '.') . '</span></td>'; // Total UP
                            echo '<td>' . number_format(100, 2, '.', ',') . '%</td>'; // Total UP percentage
                            echo '<td>UP yang berhasil diselamatkan</td>';
                            echo '</tr>';
                        }
                        ?>



                        <tr>
                            <th>Total</th>
                            <th><?php echo number_format($total_up_all, 0, ',', '.'); ?></th>
                            <th><?php echo number_format($total_up_all ? ($total_up_all / $total_up_all) * 100 : 0, 2, '.', ','); ?>%
                            </th>
                            <th><?php echo number_format($total_up_all, 0, ',', '.'); ?></th>
                            <th><?php echo number_format($total_up_all ? ($total_up_all / $total_up_all) * 100 : 0, 2, '.', ','); ?>%
                            </th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
                <p><strong>Analisa:</strong></p>
                <ol>
                    <?php
                    // Asumsi koneksi database sudah dibuat sebelumnya

                    // Query untuk mengambil semua data
                    $sql = "SELECT * FROM $tabel";
                    $result = mysqli_query($koneksi, $sql);

                    // Inisialisasi variabel
                    $result_counts = [];
                    $total_kasus = 0;
                    $total_polis = 0;
                    $total_diselamatkan = 0;

                    // Loop melalui semua data
                    while ($row = mysqli_fetch_assoc($result)) {
                        $total_kasus++;

                        // Hitung total berdasarkan Result
                        $result_type = trim($row['Result']);
                        if (!empty($result_type)) {
                            if (!isset($result_counts[$result_type])) {
                                $result_counts[$result_type] = 0;
                            }
                            $result_counts[$result_type]++;
                        }

                        // Hitung total polis dan yang diselamatkan
                        $up = !empty($row['UP']) ? intval($row['UP']) : 0;
                        $klaim = !empty($row['Klaim Yang Diajukan']) ? intval($row['Klaim Yang Diajukan']) : 0;
                        $total_polis += $up + $klaim;

                        // Asumsikan semua kasus dengan Result selain 'No Finding' adalah kasus yang diselamatkan
                        if ($result_type != 'No Finding' && !empty($result_type)) {
                            $total_diselamatkan += $up + $klaim;
                        }
                    }

                    $total_temuan = array_sum($result_counts) - (isset($result_counts['No Finding']) ? $result_counts['No Finding'] : 0);
                    $percentage_temuan = ($total_kasus > 0) ? ($total_temuan / $total_kasus) * 100 : 0;
                    $percentage_diselamatkan = ($total_polis > 0) ? ($total_diselamatkan / $total_polis) * 100 : 0;

                    // Fungsi untuk menghasilkan daftar hasil
                    function generateResultList($result_counts)
                    {
                        $list = [];
                        foreach ($result_counts as $type => $count) {
                            if ($type != 'No Finding') {
                                $list[] = "$count kasus $type";
                            }
                        }
                        return implode(', ', $list);
                    }

                    $result_list = generateResultList($result_counts);
                    ?>

                    <li>Berdasarkan hasil investigasi, dari total pengajuan klaim, terdapat
                        <?php echo $result_list; ?>.
                        Sehingga total ada <?php echo $total_temuan; ?> temuan yang dapat dijadikan sebagai dasar
                        penolakan klaim
                        (atau sekitar <?php echo number_format($percentage_temuan, 2); ?>% dari total kasus yang
                        dilakukan investigasi).</li>

                    <li>Dari total uang pertanggungan polis <strong>Rp</strong>
                        <strong><?php echo number_format($total_polis, 0, ',', '.'); ?></strong>
                        yang berhasil diselamatkan dari proses investigasi atas <?php echo $total_kasus; ?> kasus
                        tersebut adalah sebesar
                        <strong>Rp <?php echo number_format($total_diselamatkan, 0, ',', '.'); ?>
                            (atau <?php echo number_format($percentage_diselamatkan, 2); ?>% dari total kasus yang
                            dilakukan investigasi).</strong>
                    </li>
                </ol>
                <div class="page-break"></div>
                <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <p>KESIMPULAN</p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <p><strong>Berdasarkan hasil investigasi yang telah kami lakukan dan juga telah kami jabarkan
                        di</strong>
                    <strong>atas maka berikut ini kami sampaikan kesimpulan sebagai berikut:</strong>
                </p>
                <ol start="1">
                    <?php
                    // Hitung total semua Nomor Polis unik di tabel sebagai dasar perhitungan persentase
                    $sql_total = "SELECT COUNT(DISTINCT `Nomor Polis`) AS total_all FROM $tabel";
                    $result_total = mysqli_query($koneksi, $sql_total);
                    $row_total = mysqli_fetch_assoc($result_total);
                    $total_polis_all = $row_total['total_all'];

                    // Query untuk mendapatkan provinsi dengan jumlah kasus investigasi terbanyak
                    $sql = "SELECT Provinsi, COUNT(DISTINCT `Nomor Polis`) AS total FROM $tabel GROUP BY Provinsi ORDER BY total DESC LIMIT 1";
                    $result = mysqli_query($koneksi, $sql);
                    $row = mysqli_fetch_assoc($result);

                    // Menghitung persentase
                    $persentase = ($row['total'] / $total_polis_all) * 100;

                    // Menampilkan hasil
                    echo "<li>Wilayah dengan kasus investigasi terbanyak adalah wilayah " . htmlspecialchars($row['Provinsi']) .
                        " yaitu sebanyak " . htmlspecialchars($row['total']) .
                        " polis (atau " . number_format($persentase, 2) . "% dari total polis).</li>";
                    ?>

                </ol>
                <?php
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $sql = "SELECT * FROM kesimpulan WHERE id_kesimpulan = '$id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p><strong>$counter.</strong> " . nl2br(htmlspecialchars($row['kesimpulan'])) . "</p>";
                        $counter++;
                    }
                } else {
                    echo "<p>Tidak ada kesimpulan yang ditemukan.</p>";
                }
                ?>
                <p>&nbsp;</p>
                <div class="page-break"></div>
                <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <p>REKOMENDASI</p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <p><strong>Bahwa berdasarkan kesimpulan akhir yang telah kami sampaikan sebelumnya, maka berikut ini
                        kami
                        sampaikan rekomendasi yang dapat diambil lebih lanjut:</strong></p>
                <?php
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $sql = "SELECT * FROM rekomendasi WHERE id_rekomendasi = '$id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p><strong>$counter.</strong> " . nl2br(htmlspecialchars($row['rekomendasi'])) . "</p>";
                        $counter++;
                    }
                } else {
                    echo "<p>Tidak ada rekomendasi yang ditemukan.</p>";
                }
                ?>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </body>

</html>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

</html>