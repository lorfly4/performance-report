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
            $total_uang_pertanggungan_all = 0; // Inisialisasi total uang pertanggungan

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
            $total_uang_pertanggungan_all = 0;

            // Hitung total nomor polis, insured name, dan uang pertanggungan dari seluruh data
            foreach ($result as $key => $value) {
                $nomor_polis_all = array_merge($nomor_polis_all, explode(',', $value['Nomor Polis']));
                $total_nomor_polis_all += count(array_unique(explode(',', $value['Nomor Polis'])));

                $insured_name_all = array_merge($insured_name_all, explode(',', $value['Insured Name']));
                $total_insured_name_all += count(array_unique(explode(',', $value['Insured Name'])));

                $uang_pertanggungan_all = array_map('intval', explode(',', $value['UP']));
                $total_uang_pertanggungan_all += array_sum($uang_pertanggungan_all);
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
                    $total_uang_pertanggungan = 0;
                    foreach ($result as $key => $value) {
                        if (strtolower($value['Provinsi']) == strtolower($provinsi) || strtolower($value['Provinsi 2']) == strtolower($provinsi)) {
                            $uang_pertanggungan = array_map('intval', explode(',', $value['UP']));
                            $total_uang_pertanggungan += array_sum($uang_pertanggungan);
                        }
                    }
                    echo '<td style="width: 12.4714%; height: 22px;">' . number_format($total_uang_pertanggungan, 0, '.', ',') . '</td>';

                    // % Total UP
                    $persentase_uang_pertanggungan = ($total_uang_pertanggungan / $total_uang_pertanggungan_all) * 100;
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
                    <?php echo number_format($total_uang_pertanggungan_all, 0, '.', ','); ?>
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
    <p>Dengan demikian wilayah dengan kasus investigasi terbanyak berdasarkan jumlah nasabah adalah wilayah
        <?php echo array_key_exists(0, $top3_polis) ? $top3_polis[0] : ''; ?>
        (<?php echo array_key_exists(0, $top3_polis) ? number_format(($top3_polis[0] / $total_nomor_polis_all) * 100, 2, '.', ',') : ''; ?>%
        dari total
        <?php echo $total_nomor_polis_all; ?> polis) dan
        <?php echo array_key_exists(1, $top3_polis) ? $top3_polis[1] : ''; ?>
        (<?php echo array_key_exists(1, $top3_polis) ? number_format(($top3_polis[1] / $total_nomor_polis_all) * 100, 2, '.', ',') : ''; ?>%
        dari total
        <?php echo $total_nomor_polis_all; ?> polis).</p>
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
        $result_array = array();
        while ($row = mysqli_fetch_array($result)) {
            $result_array[] = $row;
        }
        $date_year_terbanyak = array_reduce($result_array, function ($carry, $item) {
            if ($carry === null || $item['Total'] > $carry['Total']) {
                return [
                    'DateYear' => $item['DateYear'],
                    'Total' => $item['Total']
                ];
            }
            return $carry;
        }, null);
        $date_month_terbanyak = array_reduce($result_array, function ($carry, $item) {

            if ($carry === null || $item['Total'] > $carry['Total']) {
                return [
                    'Date Month' => $item['Date Month'],
                    'Total' => $item['Total']
                ];
            }
            return $carry;
        }, null);
        ?>
        <p> 1. Berdasarkan jumlah polis yang dimiliki oleh setiap nasabah adalah sebagai berikut:</p>
        <p>Penerimaan Case terbanyak adalah di bulan
            <?php echo $date_month_terbanyak ? date('F', strtotime($date_month_terbanyak['Date Month'])) : 'Tidak ada data'; ?>
            dengan <?php echo $date_month_terbanyak ? $date_month_terbanyak['Total'] : '0'; ?> polis atau
            <?php echo $date_month_terbanyak ? number_format(($date_month_terbanyak['Total'] / $total_insured_name_all) * 100, 1, '.', ',') : '0'; ?>%
            dari total
            penerimaan polis di tahun
            <?php echo $date_year_terbanyak ? $date_year_terbanyak['Total'] : 'Tidak ada data'; ?>.
        </p>
        <?php
        $date_month_terendah = array_reduce($result_array, function ($carry, $item) {

            if ($carry === null || $item['Total'] < $carry['Total']) {
                return [
                    'DateYear' => $item['DateYear'],
                    'Date Month' => $item['Date Month'],
                    'Total' => $item['Total']
                ];
            }
            return $carry;
        }, null);
        ?>
        <p>Sedangkan untuk penerimaan case terendah adalah di bulan
            <?php echo $date_month_terendah ? date('F', strtotime($date_month_terendah['Date Month'])) : 'Tidak ada data'; ?>
            dengan <?php echo $date_month_terendah ? $date_month_terendah['Total'] : '0'; ?> polis atau
            <?php echo $date_month_terendah ? number_format(($date_month_terendah['Total'] / $total_insured_name_all) * 100, 1, '.', ',') : '0'; ?>%
            dari total penerimaan polis di tahun
            <?php echo $date_month_terendah ? $date_month_terendah['DateYear'] : 'Tidak ada data'; ?>.
        </p><br>
        <p> 2. Adapun top 3 wilayah dengan Total Uang Pertanggungan terbesar adalah sebagai berikut:</p>
        <?php
        $result_array = array_reduce(iterator_to_array($result), function ($carry, $item) {
            if (!isset($carry[$item['Provinsi']])) {
                $carry[$item['Provinsi']] = 0;
            }
            $carry[$item['Provinsi']] = $carry[$item['Provinsi']] + $item['UP'];
            return $carry;
        }, []);
        arsort($result_array);
        $top3_provinsi = array_slice($result_array, 0, 3);
        foreach ($top3_provinsi as $key => $value) {
            echo ' ' . $key . ' dengan total UP Rp ' . number_format($value, 0, ',', '.') . ' (' . number_format(($value / $total_uang_pertanggungan_all) * 100, 1, '.', ',') . '% dari total keseluruhan UP). ';
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
    // Data untuk chart
    $data = [
        ['name' => 'TPD', 'y' => 1, 'color' => 'red'],
        ['name' => 'HS', 'y' => 51, 'color' => 'orange'],
        ['name' => 'DC', 'y' => 128, 'color' => 'blue'],
        ['name' => 'CI', 'y' => 42, 'color' => 'green']
    ];

    // Konversi data ke format JSON untuk digunakan di JavaScript
    $chartData = json_encode($data);
    ?>

    <div id="container" style="width:100%; height:400px;"></div>

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        Highcharts.chart('container', {
            chart: {
                type: 'bar',
                backgroundColor: '#D3D3D3' // Sesuai dengan warna latar belakang gambar
            },
            title: {
                text: 'Jenis Klaim Yang Diinvestigasi (Cases)'
            },
            xAxis: {
                categories: ['TPD', 'HS', 'DC', 'CI'],
                title: {
                    text: null
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
                bar: {
                    dataLabels: {
                        enabled: true
                    }
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
                data: <?php echo $chartData; ?>
            }]
        });
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
                <tr>
                    <td>CI</td>
                    <td>42</td>
                    <td>18.9%</td>
                    <td>39,198,646,014</td>
                </tr>
                <tr>
                    <td>DC</td>
                    <td>128</td>
                    <td>57.7%</td>
                    <td>52,334,303,280</td>
                </tr>
                <tr>
                    <td>HS</td>
                    <td>51</td>
                    <td>23.0%</td>
                    <td>8,185,082,949</td>
                </tr>
                <tr>
                    <td>TPD</td>
                    <td>1</td>
                    <td>0.5%</td>
                    <td>500,000,000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td>222</td>
                    <td>100.0%</td>
                    <td>100,218,032,243</td>
                </tr>
            </tfoot>
        </table>
        <p><strong>Analisa:</strong></p>
        <p>Adapun jenis klaim yang telah dilakukan investigasi berdasarkan jumlah polis adalah sebagai berikut:</p>
        <p>&nbsp;</p>
        <ol>
            <li>Klaim Meninggal (DC) sebanyak 128 Polis (atau 57.8 % dari total 222 Polis).</li>
            <li>Hospital (HS) sebanyak 51 Polis (atau 23% dari total 222 Polis).</li>
            <li>Klaim Critical Illness (CI) sebanyak 42 Polis (atau 18.9% dari total 222 Polis).</li>
            <li>Klaim TPD sebanyak 1 Polis (atau 0.5% dari total 222 Polis).</li>
        </ol>
        <p>&nbsp;</p>
        <p>Dari informasi tersebut dapat ditarik kesimpulan jika kasus klaim paling banyak adalah klaim meninggal (DC)
            yaitu 57.7% dari total Polis yang dilakukan investigasif.</p>
        <p>&nbsp;</p>
        <div class="page-break"></div>

        <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <p><strong>3. TURN AROUND TIME (TAT)</strong></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <h2>TAT Investigasi (Days)</h2>
        <div id="tatChart" style="width:100%; height:230px;"></div>

        <h2>SLA Investigasi (Policy Level)</h2>
        <div id="slaChart" style="width:100%; height:230px;"></div>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script type="text/javascript">
        // Chart 1: TAT Investigasi
        Highcharts.chart('tatChart', {
            chart: {
                type: 'column',
                backgroundColor: '#d3d3d3'
            },
            title: {
                text: 'TAT Investigasi (Days)'
            },
            xAxis: {
                categories: ['CI', 'DC', 'HS', 'TPD'],
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
                data: [32, 30, 27, 48],
                color: '#1f78b4'
            }, {
                name: 'TAT Average',
                type: 'line',
                data: [34, 34, 34, 34],
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

        // Chart 2: SLA Investigasi (Policy Level)
        Highcharts.chart('slaChart', {
            chart: {
                type: 'column',
                backgroundColor: '#d3d3d3'
            },
            title: {
                text: 'SLA Investigasi (Policy Level)'
            },
            xAxis: {
                categories: ['14 days', 'More than 14 days'],
                crosshair: true
            },
            yAxis: [{
                min: 0,
                title: {
                    text: 'Cases'
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
                name: 'Case',
                data: [97, 112],
                color: '#1f78b4'
            }, {
                name: 'Average SLA (days)',
                type: 'line',
                data: [10, 43],
                color: 'orange',
                marker: {
                    enabled: false
                }
            }]
        });
        </script>
        <table>
            <thead>
                <tr>
                    <th>TAT</th>
                    <th>Case</th>
                    <th>Average SLA(Days)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>14 Days</td>
                    <td>97</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>More Than 14 Days</td>
                    <td>112</td>
                    <td>43</td>
                </tr>
        </table>
        <p><strong>Analisa:</strong></p>
        <ol>
            <li>Rata-rata TAT untuk 222 polis adalah selama 34 hari kalender sebagai berikut:</li>
        </ol>
        <ul>
            <li>Klaim critical illness (CI) selama 21 hari kalender.</li>
            <li>Klaim meninggal (DC) selama 30 hari kalender.</li>
            <li>Klaim HS(Hospital) selama 27 hari kalender</li>
            <li>Klaim TPD selama 48 hari kalender</li>
        </ul>
        <ol start="2">
            <li>Adapun yang menjadi penyebab proses investigasi dapat melewati batas waktu 14 hari kalender</li>
        </ol>
        <p>&nbsp;</p>
        <ul>
            <li>Perlu dilakukannya proses penelusuran pada beberapa fasilitas kesehatan di Malaysia dan</li>
        </ul>
        <p>Singapura yang tidak dapat ditentukan waktunya.</p>
        <div class="page-break"></div>


        <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <ul>
            <li>Proses pengecekan alamat mengalami kendala karena kondisi wilayah domisili Ahli Waris terkena banjir,
                sehingga proses wawancara baru dapat dilakukan setelah kondisi jalan sudah dapat dilalui.</li>
            <li>Perlu adanya tambahan waktu untuk melakukan wawancara dengan Ahli Waris sehubungan dengan Ahli Waris
                mengatakan sibuk dan sedang berada di luar kota, sehingga proses wawancara baru dapat dilakukan setelah
                Ahli Waris bersedia untuk ditemui.</li>
            <li>Perlu adanya tambahan waktu atas pengisian APS pada beberapa fasilitas Kesehatan sehubungan dengan
                dokter yang melakukan pemeriksaan sedang menangani banyak pasien dan/atau dinas ke luar kota</li>
        </ul>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <p><strong>4. HASIL INVESTIGASI</strong></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        <div id="chart2" style="width:100%; height:400px;"></div>

        <script>
        Highcharts.chart('chart2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Temuan Investigasi'
            },
            xAxis: {
                categories: ['PEC', 'FRAUD', 'FINANCIAL BACKGROUND', 'Re UW', 'SECOND OPINION', 'No FINDING']
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
                data: [63, 8, 5, 15, 1, 114]
            }, {
                name: '% Cases',
                type: 'spline',
                yAxis: 1,
                data: [31, 4, 2, 7, 0, 55],
                tooltip: {
                    valueSuffix: '%'
                }
            }]
        });
        </script>
        <p><strong><u>Temuan Investigasi </u></strong></p>
        <p><strong>Analisa:</strong></p>
        <ol>
            <li>Adapun temuan hasil investigasi berdasarkan jumlah polis, diperoleh data sebagai berikut:</li>
        </ol>
        <ul>
            <li>Pre-Existing Condition (PEC) sebanyak 63 kasus (atau 31% dari total 222 polis).</li>
            <li>No Finding sebanyak 114 kasus (atau 55% dari total 222 polis).</li>
            <li>Fraud sebanyak 8 kasus (atau 4% dari total 222 polis).</li>
            <li>Financial Background sebanyak 5 kasus (atau 2% dari total 222 polis).</li>
            <li>Re Underwriting sebanyak 15 kasus (atau 7% dari total 222 polis).</li>
        </ul>
        <ol start="2">
            <li>Dari total 222 polis atau 186 nasabah yang telah dilakukan investigasi, terdapat 71 polis atau 56
                nasabah (31.98% dari total polis) yang dapat dijadikan acuan untuk menolak klaim serta membatalkan
                polis.</li>
        </ol>
        <div class="page-break"></div>

        <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <p><strong><u>Sebaran Wilayah Hasil Investigasi dengan temuan PEC dan Fraud</u></strong></p>
        <div id="chart1" style="width:100%; height:400px;"></div>

        <script>
        Highcharts.chart('chart1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Sebaran Area Dengan Temuan PEC dan Fraud'
            },
            xAxis: {
                categories: ['Bali', 'Banten', 'DI Yogyakarta', 'Jakarta', 'Jawa Barat', 'Jawa Tengah',
                    'Jawa Timur', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Utara', 'Pekanbaru',
                    'Riau', 'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara'
                ]
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
                    grouping: false, // Ensures PEC and Fraud are shown separately
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            series: [{
                name: 'Fraud',
                color: '#007bff', // Blue color
                data: [1, 4, 1, 1, 1, 1, 3, 1, 1, 1, 1, 1, 5, 1, 2],
                pointPadding: 0.2, // Adjust spacing between columns
                pointPlacement: -0.2 // Shifts Fraud to the left
            }, {
                name: 'PEC',
                color: '#f58220', // Orange color
                data: [4, 12, 12, 1, 1, 2, 7, 7, 1, 1, 1, 1, 5, 4, 20],
                pointPadding: 0.2, // Adjust spacing between columns
                pointPlacement: 0.2 // Shifts PEC to the right
            }, {
                name: 'Total',
                type: 'line',
                color: '#90ed7d', // Green color
                data: [5, 16, 13, 2, 2, 3, 10, 8, 2, 2, 2, 2, 10, 5, 22],
                marker: {
                    enabled: true,
                    radius: 3
                }
            }]
        });
        </script>

        <p><strong>Analisa:</strong></p>
        <ol>
            <li><strong>Hasil Investigasi klaim dengan temuan PEC</strong><strong>j</strong></li>
        </ol>
        <p>Berdasarkan 63 kasus dengan temuan PEC (Pre Exiciting condition) diperoleh data sebagai berikut:</p>
        <ul>
            <li>Top 3 diagnosa penyakit yang ditemukan meliputi HT, DM dan Stroke.</li>
            <li>Wilayah dengan hasil temuan terbanyak adalah daerah Sumatera Utara yaitu sebanyak 22 kasus (atau 34.92%
                dari total 63 kasus).</li>
        </ul>
        <p><strong>&nbsp;</strong></p>
        <ol start="2">
            <li><strong>Hasil investigasi klaim dengan temuan fraud.</strong></li>
        </ol>
        <p>Berdasarkan 8 kasus Fraud diperoleh data informasi sebagai berikut:</p>
        <ul>
            <li>Ahli waris mengakui telah melakukan pemalsuan tandatangan Ketua RT pada Surat Keterangan Kematian
                Tertanggung.</li>
            <li>Berdasarkan hasil silence investigation, Tertanggung diketahui dapat melakukan komunikasi secara normal
                tanpa menggunakan alat bantu dengar (kasus penyakit kritis ketulian).</li>
            <li>Berdasarkan hasil investigasi dan pengakuan dari Ahli waris, bahwa Tertanggung sudah meninggal sebelum
                polis diterbitkan.</li>
        </ul>
        <p>Judul d</p>
        <ul>
            <li>Berdasarkan pengakuan dari Tertanggung bahwa polis dibelikan dan dibayarkan oleh atasan Tertanggung</li>
            <li>Bahwa Pemegang Polis sekaligus Ahli waris mengaku tidak pernah menandatangani SPAJ dan tidak mengetahui
                mengenai informasi polis.</li>
            <li>Berdasarkan pengecekan pada faskes terdata dan informasi dari Wakil Kepala Rumah Sakit, bahwa
                Tertanggung tidak pernah menjalani perawatan di faskes tersebut dan dokumen klaim tidak pernag
                dikeluarkan oleh pihak rumah sakit.</li>
        </ul>
        <p>&nbsp;</p>
        <ol start="3">
            <li><strong>Hasil investigasi klaim dengan temuan Batal Polis</strong></li>
        </ol>
        <p>Berdasarkan 2 kasus Fraud diperoleh data informasi sebagai berikut:</p>
        <div class="page-break"></div>

        <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <ul>
            <li>Ahli waris mengakui bahwa terdapat ketidakbenaran dalam memberikan informasi mengenai tempat kematian
                Tertanggung, dimana pada saat pengajuan klaim Tertanggung</li>
            <li>dinyatakan meninggal di Pasaman Barat, namun dari hasil investigasi diketahui Tertanggung meninggal di
                Nias.</li>
            <li>Nasabah membatalkan polis karena merasa proses klaim di Asuransi Allianz yang lama dan meminta untuk
                klaim yang sudah diajukan dapat dibayarkan.</li>
        </ul>
        <p>&nbsp;</p>
        <ol>
            <li><strong>Hasil investigasi klaim dengan Hasil Case Closed</strong></li>
        </ol>
        <ul>
            <li>Proses investigasi dihentikan (case closed) sehubungan dengan nasabah tidak berhasil ditemui dan nomor
                telepon tidak berhasil dihubungi</li>
            <li>Rumah sakit mensyaratkan adanya Surat Kuasa asli dari Nasabah, dimana dalam hal inj sesuai dengan
                permintaan dari Asuransi Allianz nasabah tidak diperkenankan untuk ditemui.</li>
        </ul>
        <p>&nbsp;</p>
        <ol start="2">
            <li><strong>Hasil investigasi klaim dengan Hasil No Finding</strong></li>
        </ol>
        <ul>
            <li>Berdasarkan hasil investigasi ke berbagai pihak baik pada fasilitas kesehatan, institusi pemerintah
                serta hasil wawancara, tidak ditemukan data medis sebelum polis diterbitkan yang bersifat material.</li>
            <li>Dari sisi financial background telah sesuai baik informasi di dalam SPAJ dan temuan di lapangan, dalam
                hal ini pembayar premi memiliki kemampuan untuk membeli dan membayarkan premi.</li>
            <li>Tidak terdapat indikasi fraud baik dalam proses penutupan polis maupun pengajuan klaim. Tidak ada
                kejanggalan apapun pada saat melakukan wawancara dengan nasabah dimana semua informasi dapat dijawab
                dengan baik dan lancar serta dapat menunjukan bukti-bukti yang ditanyakan oleh investigator.</li>
        </ul>
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
                    <tr>
                        <td>PEC</td>
                        <td>33,821,498,289</td>
                        <td>33.75%</td>
                        <td><span style="white-space: nowrap;">42,878,603,345</span></td>
                        <td>43%</td>
                        <td>UP yang berhasil diselamatkan</td>
                    </tr>
                    <tr>
                        <td>Fraud</td>
                        <td>5,982,206,400</td>
                        <td>5.97%</td>
                        <td><span style="white-space: nowrap;">42,878,603,345</span></td>
                        <td>43%</td>
                        <td>UP yang berhasil diselamatkan</td>
                    </tr>
                    <tr>
                        <td>Financial background</td>
                        <td>3,074,898,656</td>
                        <td>3.07%</td>
                        <td><span style="white-space: nowrap;">42,878,603,345</span></td>
                        <td>43%</td>
                        <td>UP yang berhasil diselamatkan</td>
                    </tr>
                    <tr>
                        <td>No Finding</td>
                        <td>48,569,236,177</td>
                        <td>48.46%</td>
                        <td>48,569,236,177</td>
                        <td>48%</td>
                        <td>UP tidak ada temuan</td>
                    </tr>
                    <tr>
                        <td>Re Underwriting</td>
                        <td>8,770,192,721</td>
                        <td>8.75%</td>
                        <td>8,770,192,721</td>
                        <td>9%</td>
                        <td>Menunggu keputusan dari internal Allianz</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>100,218,032,243</th>
                        <th>100%</th>
                        <th>100,218,032,243</th>
                        <th>100%</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
            <p><strong>Analisa:</strong></p>
            <ol>
                <li>Berdasarkan hasil investigasi, dari total pengajuan klaim, terdapat 63 kasus PEC,8 kasus Fraud, 2
                    kasus Batal Polis dan 5 Financial background Sehingga total ada 78 temuan yang dapat dijadikan
                    sebagai dasar penolakan klaim (atau sekitar&nbsp; 13% dari total kasus yang dilakukan investigasi) .
                </li>
                <li>Dari total uang pertanggungan polis <strong>Rp</strong> <strong>100,218,032,243 </strong>yang
                    berhasil diselamatkan dari proses investigasi atas 55 kasus tersebut adalah sebesar
                    <strong><strong>Rp 42,878,603,345 (atau 43% dari total kasus yang dilakukan
                            investigasi).</strong></strong>

                </li>
            </ol>
            <div class="page-break"></div>
            <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p>KESIMPULAN</p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p><strong>Berdasarkan hasil investigasi yang telah kami lakukan dan juga telah kami jabarkan di</strong>
                <strong>atas maka berikut ini kami sampaikan kesimpulan sebagai berikut:</strong>
            </p>
            <ol>
                <li>Wilayah dengan kasus investigasi terbanyak adalah wilayah Sumatera Utara yaitu sebanyak 92 polis
                    (atau 41.4% dari total polis). &egrave; Bahasa baku, untuk wilayah dan data disesuaikan berdasarkan
                    policy level, persentase diambil dari total kasus wilayah tersebut per total polis keseluruhan</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="2">
                <li>Berdasarkan temuan investigasi, untuk temuan Pre-Existing Condition (PEC) merupakan kasus dengan
                    temuan terbanyak yaitu sebanyak 63 kasus (atau 31% dari total kasus). &egrave; free teks</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="3">
                <li>Terdapat 78 temuan yang dapat dijadikan sebagai dasar penolakan klaim. <strong>Dengan demikian
                        sukses rate atas klaim untuk proses investigasi adalah sebesar 35.13%.
                    </strong><strong>&egrave;</strong> free teks</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="4">
                <li>Rata-rata turnaround time (TAT) penyelesain kasus adalah 14 hari kalender (Normal Case) dan 30 hari
                    kalender untuk Non-Normal Case. &egrave; free teks</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="5">
                <li>Bahwa uang pertanggungan yang dapat diselamatkan atas ke 222 kasus yang dilakukan investigasi
                    periode tahun 2023 adalah sebesar <strong>Rp 42,878,603,345 (atau 43% dari total kasus yang
                        dilakukan investigasi). </strong>&egrave; free teks</li>
            </ol>
            <p>&nbsp;</p>
            <div class="page-break"></div>
            <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p>REKOMENDASI</p>
            <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
            </p>
            <p><strong>Bahwa berdasarkan kesimpulan akhir yang telah kami sampaikan sebelumnya, maka berikut ini kami
                    sampaikan rekomendasi yang dapat diambil lebih lanjut:</strong></p>
            <ol>
                <li>Bahwa perlu adanya perhatian khusus terhadap pengajuan klaim atas polis-polis yang ditutup di
                    wilayah dengan jumlah temuan investigasi terbanyak, dan apabila diperlukan penelusuran lebih lanjut
                    atas pengajuan klaim tersebut.</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="2">
                <li>Bahwa temuan-temuan dalam proses Investigasi ini baik adanya bagi area underwriting dalam melakukan
                    mitigasi fraud kedepan, sehingga ada penguatan dalam proses seleksi resiko.</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="3">
                <li>Perlu adanya strategi baru yang perlu diimplementasikan oleh Asuransi Allianz untuk bisa
                    mengantisipasi adanya fraud yang sama untuk kedepannya, seperti proses KYC (Knowing Your Customer)
                    terhadap polis-polis yang masih inforce yang dicurigai terdapat indikasi fraud dengan parameter area
                    penutupan polis, uang pertanggungan, agen penutup yang terindikasi nakal.</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="4">
                <li>Bahwa point 2 &amp; 3 diatas merupakan strategy mitigasi resiko yang bersifat anticipative dan
                    preventive yang nanti akan ditambah dengan strategy yang bersifat corrective Ketika claim terjadi
                    dan dilakukan investigasi secara massive, dengan demikian strategy mitigasi risk akan lengkap.</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="5">
                <li>Bahwa Asuransi Allianz harus melakukan pendalaman terhadap agen atas polis-polis dengan temuan
                    klaim<strong>,</strong> dimana ada indikasi kuat telah mengetahui bahwa Tertanggung menderita sakit
                    sebelumnya namun diindahkan sehingga polis bisa terbit atau bekerjasama untuk melakukan fraud. Hal
                    ini penting untuk memberikan efek jera serta pesan kuat bagi agen lain yang akan mencoba untuk
                    melakukan hal yang sama.</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="6">
                <li>Rekomendasi point 1-5 diatas jika dijalankan akan mampu semakin memperkuat Kesehatan Keuangan
                    Asuransi Allianz serta perusahaan tidak dipandang mudah untuk dilakukan <em>abuse</em> dalam
                    pengajuan klaimnya.</li>
            </ol>
            <p>&nbsp;</p>
            <ol start="7">
                <li>Apa yang kami sampaikan di atas pada dasarnya adalah sebuah rekomendasi keputusan secara umum
                    berdasarkan <em>common practice, insurance perspective dan juga field finding,</em> namun demikian
                    hal tersebut kami kembalikan kepada Perusahaan Asuransi menyangkut keputusan akhir berdasarkan
                    ketentuan Polis yang dimiliki serta pertimbangan lainnya.</li>
            </ol>

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