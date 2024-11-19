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

if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
    $tabel = 'allianz';
} else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
    $tabel = 'msig';
} else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
    $tabel = 'generali';
} else if ($client_name == 'PT. ASURANSI BRI LIFE') {
    $tabel = 'bri';
} else {
    die('client_name tidak ditemukan');
}

$sql = "SELECT * FROM $tabel";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    die('Query error: ' . mysqli_error($koneksi));
}
?>

<?php
$periode_sql = "SELECT periode FROM document WHERE id = $id";
$periode_result = mysqli_query($koneksi, $periode_sql);
$periode = mysqli_fetch_array($periode_result)['periode'];
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
    * {
        box-sizing: border-box;
    }

    body {
        margin: 1cm;
        padding: 0;
        overflow-x: hidden;
        font-family: Arial, sans-serif;
        -webkit-print-color-adjust: exact;
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

    img,
    iframe {
        max-width: 100%;
        height: auto;
    }

    @media print {
        @page {
            size: potrait;
            margin: 0;
        }

        header,
        footer {
            display: none;
        }
    }

    .page-break {
        page-break-before: always;
    }

    /* Memperbesar ukuran teks untuk paragraf dan daftar */
    p {
        font-size: 12pt;
        /* Ukuran teks untuk paragraf */
        line-height: 1.3;
        /* Memberikan jarak antar baris agar lebih nyaman dibaca */
    }

    ol {
        font-size: 12pt;
        /* Ukuran teks untuk daftar berurutan */
        line-height: 1.3;
        /* Memberikan jarak antar item dalam daftar */
    }

    strong {
        font-size: 12pt;
        /* Memperbesar teks bold */
    }

    .content {
        width: 80%;
        /* Atur lebar konten */
        max-width: 1200px;
        /* Lebar maksimum konten */
        background-color: white;
        /* Warna latar belakang konten */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Bayangan untuk efek kedalaman */
        padding: 20px;
        /* Ruang di dalam konten */
        border-radius: 5px;
        /* Sudut membulat */
    }
    </style>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="./img/background.jpg" style="width: 70vw; height: 60vh;">
    </div>
    <div class="container">
        <h1>PERFORMANCE REPORT</h1>
        <h2><?php echo $nama; ?></h2>

        <p><br></p>
        <img src="./client/upload/<?php echo htmlspecialchars(string: $image); ?>" alt="Logo"
            style="max-width: 400px; height: auto; margin: auto;">
        <h1>Periode : <?php echo $periode; ?> <?php echo date('Y'); ?></h1>
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
    <p>Jakarta, <?php echo $p['tanggal']; ?></p>
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
    <?php
    $query = "SELECT foto FROM document WHERE client_id = '$client_id' AND periode = '$periode' ORDER BY tanggal DESC LIMIT 1";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div><img src="./img/<?php echo $row['foto']; ?>" alt=" " style="width: 73vw; height:  20vh;" /></div>
    <p>Jumlah kasus selesai Per Provinsi</p>

    <?php
    include 'koneksi.php'; // Pastikan koneksi ke database

    // Ambil nama client dari array $client
    $client_name = $client['name'];

    // Tentukan tabel yang akan digunakan berdasarkan nama client
    if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
        $tabel = 'allianz';
    } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
        $tabel = 'msig';
    } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
        $tabel = 'generali';
    } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
        $tabel = 'bri';
    } else {
        die('client_name tidak ditemukan');
    }

    // Ambil periode dari database
    $periode_sql = "SELECT periode FROM document WHERE id = $id";
    $periode_result = mysqli_query($koneksi, $periode_sql);
    $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

    // Cek apakah periode diambil dengan benar
    if ($periode === null) {
        die("Periode tidak ditemukan untuk ID: $id");
    }

    // Pecah periode menjadi array berdasarkan tanda pemisah " - "
    $bulanDipilih = explode(' - ', $periode);

    // Buat klausa WHERE untuk `Date Month` berdasarkan bulan dalam $bulanDipilih
    $bulanKondisi = "'" . implode("', '", $bulanDipilih) . "'";

    // Query untuk mendapatkan data berdasarkan tabel dan periode yang dipilih
    $query = "SELECT DISTINCT `Insured Name`, `Nomor Polis`, `Date Month` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die('Query error: ' . mysqli_error($koneksi));
    }

    // Hitung total unik `Insured Name`
    $insured_name = array();
    foreach ($result as $value) {
        $insured_name[] = trim($value['Insured Name']); // Bersihkan whitespace di awal/akhir
    }
    $total_insured_name = count(array_unique($insured_name));
    echo number_format($total_insured_name, 0, '.', ',') . " nasabah";

    // Hitung total unik `Nomor Polis`
    $nomor_polis = array();
    foreach ($result as $value) {
        // Pisahkan nomor polis jika ada beberapa dalam satu baris, bersihkan whitespace
        $polis_list = array_map('trim', explode(',', $value['Nomor Polis']));
        foreach ($polis_list as $polis) {
            if (!empty($polis)) {
                $nomor_polis[] = $polis;
            }
        }
    }
    $total_nomor_polis = count(array_unique($nomor_polis));
    ?>

    <div id="_com_2" language="JavaScript"><br></div>
    <table style="border-collapse: collapse; width: 100%; height: 502px;" border="1">
        <tbody>
            <tr style="height: 10px;">
                <td style="width: 16.1%; text-align: center; height: 10px; background-color: #007bff; color: white;">
                    Provinsi</td>
                <td style="width: 12.4714%; text-align: center; height: 10px; background-color: #007bff; color: white;">
                    Jumlah Kasus</td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    % Total Kasus</td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    Jumlah Nasabah</td>
                <td style="width: 14.2857%; height: 10px; background-color: #007bff; color: white;">% Total Nasabah
                </td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    Total UP (Rp)</td>
                <td style="width: 14.2857%; height: 10px; text-align: center; background-color: #007bff; color: white;">
                    % Total UP</td>
            </tr>
            <?php
            // Ambil data periode
            $periode_sql = "SELECT periode FROM document WHERE id = $id";
            $periode_result = mysqli_query($koneksi, $periode_sql);
            $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

            // Cek apakah periode diambil dengan benar
            if ($periode === null) {
                die("Periode tidak ditemukan untuk ID: $id");
            }

            // Asumsikan $bulan_periode sudah otomatis terisi sesuai dengan $periode
            $bulan_periode = !empty($periode) ? explode(' - ', $periode) : [];

            // Siapkan kondisi untuk query
            $bulanKondisi = "'" . implode("', '", $bulan_periode) . "'";

            // Query untuk menarik data
            $query = "SELECT * FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
            $result = mysqli_query($koneksi, $query);

            // Cek hasil query
            if (!$result) {
                die("Query gagal: " . mysqli_error($koneksi));
            }

            // Cek apakah ada data yang ditemukan
            if (mysqli_num_rows($result) === 0) {
                echo '<tr>
        <td colspan="7" style="text-align: center;">Data tidak ditemukan</td>
    </tr>';
            } else {
                // Inisialisasi variabel total
                $total_nomor_polis_all = 0;
                $total_insured_name_all = 0;
                $total_up_all_all = 0;

                // Daftar untuk menyimpan hasil query
                $data = [];

                // Ambil data dari hasil query dan hitung total polis dan insured name
                while ($value = mysqli_fetch_assoc($result)) {
                    // Bersihkan koma berlebih dan spasi tambahan
                    $value['Nomor Polis'] = trim($value['Nomor Polis'], ',');
                    $value['Insured Name'] = trim($value['Insured Name'], ',');
                    $value['UP'] = trim($value['UP'], ',');
                    $value['Klaim Yang Diajukan'] = trim($value['Klaim Yang Diajukan'], ',');

                    $data[] = $value;

                    $total_nomor_polis_all += !empty($value['Nomor Polis']) ? count(explode(',', $value['Nomor Polis'])) : 0;
                    $total_insured_name_all += !empty($value['Insured Name']) ? count(explode(',', $value['Insured Name'])) : 0;
                }

                // Hitung total UP atau Klaim Yang Diajukan untuk keseluruhan provinsi
                foreach ($data as $value) {
                    $up_data = !empty($value['UP']) ? $value['UP'] : $value['Klaim Yang Diajukan'];
                    if (!empty($up_data)) {
                        $uang_pertanggungan = array_map('intval', explode(',', $up_data));
                        $total_up_all_all += array_sum($uang_pertanggungan);
                    }
                }

                // Ambil daftar provinsi unik dari data
                $provinsi_data = [];
                foreach ($data as $value) {
                    if (!empty($value['Provinsi'])) {
                        $provinsi = $value['Provinsi'];
                        if (!isset($provinsi_data[$provinsi])) {
                            $provinsi_data[$provinsi] = [
                                'nomor_polis' => 0,
                                'insured_name_set' => [],
                                'total_up' => 0
                            ];
                        }

                        // Hitung Nomor Polis
                        if (!empty($value['Nomor Polis'])) {
                            $provinsi_data[$provinsi]['nomor_polis'] += count(explode(',', $value['Nomor Polis']));
                        }

                        // Tambahkan Insured Name ke set untuk keunikan
                        if (!empty($value['Insured Name'])) {
                            $insured_names = array_map('trim', explode(',', $value['Insured Name']));
                            foreach ($insured_names as $insured) {
                                if (!empty($insured)) {
                                    $provinsi_data[$provinsi]['insured_name_set'][trim($insured)] = true;
                                }
                            }
                        }

                        // Hitung Total UP untuk provinsi ini
                        $up_data = !empty($value['UP']) ? $value['UP'] : $value['Klaim Yang Diajukan'];
                        if (!empty($up_data)) {
                            $uang_pertanggungan = array_map('intval', explode(',', $up_data));
                            $provinsi_data[$provinsi]['total_up'] += array_sum($uang_pertanggungan);
                        }
                    }
                }

                // Sorting provinsi berdasarkan Nomor Polis terbanyak, lalu Insured Name terbanyak
                uasort($provinsi_data, function ($a, $b) {
                    if ($a['nomor_polis'] == $b['nomor_polis']) {
                        return count($b['insured_name_set']) - count($a['insured_name_set']); // sort by insured name if nomor polis is equal
                    }
                    return $b['nomor_polis'] - $a['nomor_polis']; // sort by nomor polis
                });

                // Loop untuk menampilkan data provinsi yang sudah diurutkan
                foreach ($provinsi_data as $provinsi => $data_provinsi) {
                    // Hitung persentase dan bulatkan
                    $persentase_polis = $total_nomor_polis_all > 0 ? round(($data_provinsi['nomor_polis'] / $total_nomor_polis_all) * 100) : 0;
                    $persentase_insured_name = $total_insured_name_all > 0 ? round((count($data_provinsi['insured_name_set']) / $total_insured_name_all) * 100) : 0;
                    $persentase_up = $total_up_all_all > 0 ? (float) round(($data_provinsi['total_up'] / $total_up_all_all) * 100, 2) : 0.0;
                    echo '<tr style="height: 22px;">
            <td style="width: 16.1%; text-align: center; height: 22px;">' . htmlspecialchars($provinsi) . '</td>
            <td style="width: 12.4714%; height: 22px;">' . number_format($data_provinsi['nomor_polis'], 0, '.', ',') . '</td>
            <td style="width: 14.2857%; height: 22px;">' . number_format($persentase_polis, 0, '.', ',') . '%</td>
            <td style="width: 12.4714%; height: 22px;">' . number_format(count($data_provinsi['insured_name_set']), 0, '.', ',') . '</td>
            <td style="width: 14.2857%; height: 22px;">' . number_format($persentase_insured_name, 0, '.', ',') . '%</td>
            <td style="width: 12.4714%; height: 22px;">' . number_format($data_provinsi['total_up'], 0, '.', ',') . '</td>
            <td style="width: 14.2857%; height: 22px;">' . number_format($persentase_up, 0, '.', ',') . '%</td>
        </tr>';
                }
            }
            ?>


            <!-- Tabel total -->
            <tr style="height: 22px;">
                <td style="width: 16.1%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    Total</td>
                <td style="width: 12.4714%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    <?php echo number_format($total_nomor_polis_all, 0, '.', ','); ?></td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    <?php echo number_format(100, 0, '.', ','); ?>%</td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    <?php echo number_format($total_insured_name_all, 0, '.', ','); ?></td>
                <td style="width: 14.2857%; text-align: center; height: 22px; background-color: #007bff; color: white;">
                    <?php echo number_format(100, 0, '.', ','); ?>%</td>
                <td style="width: 14.2857%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    <?php echo number_format($total_up_all_all, 0, '.', ','); ?></td>
                <td style="width: 14.2857%; height: 22px; text-align: center; background-color: #007bff; color: white;">
                    <?php echo number_format(100, 0, '.', ','); ?>%</td>
            </tr>

        </tbody>
    </table>
    <p>&nbsp;</p>
    <div class="page-break"></div>
    <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
    <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
    </p>
    <strong>
        <p>Analisa:</p>
    </strong>
    <p><strong>1. Berdasarkan jumlah kasus yang dilakukan investigasi</strong></p>
    <?php
    $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
    $sql = "SELECT * FROM analisa_top_wilayah WHERE id = '$id'";
    $top = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($top) > 0) {
        $counter = 2;
        while ($row = mysqli_fetch_assoc($top)) {
            echo "<p>" . nl2br(htmlspecialchars($row['top'])) . "</p>";
            $counter++;
        }
    } else {
        echo "";
    }
    ?>
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
        arsort($top3_polis);  // Urutkan array berdasarkan nilai secara menurun
        $top3_polis = array_slice($top3_polis, 0, 3); // Ambil 3 provinsi dengan kasus terbanyak

        // Variabel untuk menyimpan provinsi yang memiliki jumlah kasus yang sama
        $grouped_provinsi = [];

        // Kelompokkan provinsi yang memiliki jumlah kasus sama
        foreach ($top3_polis as $provinsi => $total) {
            $grouped_provinsi[$total][] = $provinsi;
        }

        // Tampilkan hasil
        foreach ($grouped_provinsi as $total => $provinsi_group) {
            // Hitung jumlah provinsi dalam grup ini
            $jumlah_provinsi = count($provinsi_group);

            // Menghitung persentase kasus
            $persentase = round(($total / $total_nomor_polis_all) * 100);

            if ($jumlah_provinsi == 2) {
                // Jika ada tepat 2 provinsi dengan jumlah kasus yang sama
                $provinsi_list = implode(' dan ', $provinsi_group);
                echo '<li>' . $provinsi_list . ' masing-masing memiliki ' . number_format($total, 0, '.', ',') . ' kasus (atau ' . number_format($persentase, 0, '.', ',') . '% dari total ' . $total_nomor_polis_all . ' polis).</li>';
            } elseif ($jumlah_provinsi > 2) {
                // Jika ada lebih dari 2 provinsi dengan jumlah kasus yang sama
                $provinsi_list = implode(', ', array_slice($provinsi_group, 0, -1)) . ' dan ' . end($provinsi_group);
                echo '<li>' . $provinsi_list . ' masing-masing memiliki ' . number_format($total, 0, '.', ',') . ' kasus (atau ' . number_format($persentase, 0, '.', ',') . '% dari total ' . $total_nomor_polis_all . ' polis).</li>';
            } else {
                // Jika hanya ada satu provinsi dengan jumlah kasus ini
                echo '<li>' . $provinsi_group[0] . ', sebanyak ' . number_format($total, 0, '.', ',') . ' kasus (atau ' . number_format($persentase, 0, '.', ',') . '% dari total ' . $total_nomor_polis_all . ' polis).</li>';
            }
        }
        ?>


    </ul>



    <p><strong>&nbsp;2. Penerimaan Kasus Investigasi setiap bulannya selama periode <?php echo $periode; ?>
            <?php echo date('Y'); ?></strong></p>
    <table>
        <thead>
            <tr style="height: 18px;">
                <th style="width: 33.3333%; height: 18px; text-align: center; background-color: #2c3e50; color: white;">
                    Bulan</th>
                <th style="width: 33.3333%; height: 18px; text-align: center; background-color: #2c3e50; color: white;">
                    Jumlah Kasus</th>
                <th style="width: 33.3333%; height: 18px; text-align: center; background-color: #2c3e50; color: white;">
                    %Jumlah kasus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query data dari database
            $query = "SELECT `Date Month`, COUNT(*) AS `Total` 
              FROM $tabel 
              WHERE `Date Month` IN ($bulanKondisi) 
              GROUP BY `Date Month`";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Query gagal: " . mysqli_error($koneksi));
            }

            // Inisialisasi array untuk menyimpan data per bulan
            $bulan = [];
            $total_insured_name_bulan = [];

            // Iterasi hasil query dan masukkan data ke dalam array
            while ($row = mysqli_fetch_assoc($result)) {
                $bulan[] = $row['Date Month'];
                $total_insured_name_bulan[$row['Date Month']] = $row['Total'];
            }

            // Urutkan array $bulan dari Januari ke Desember
            usort($bulan, function ($a, $b) {
                return strtotime($a) - strtotime($b);
            });

            $total_insured_name_all = array_sum($total_insured_name_bulan);

            // Tampilkan data per bulan
            foreach ($bulan as $date_month) {
                $month_name = date('F', strtotime($date_month));
                echo '<tr style="height: 18px;">';
                echo '<td style="width: 33.3333%; height: 18px;">' . $month_name . '</td>';
                echo '<td style="width: 33.3333%; height: 18px; text-align: center;">' . $total_insured_name_bulan[$date_month] . '</td>';
                echo '<td style="width: 33.3333%; height: 18px; text-align: center;">' . number_format(($total_insured_name_bulan[$date_month] / $total_insured_name_all) * 100, 0, '.', ',') . '%</td>';
                echo '</tr>';
            }

            // Tambahkan row baru untuk total semua data
            echo '<tr style="height: 18px; font-weight: bold;">';
            echo '<td style="width: 33.3333%; height: 18px; text-align: center; background-color: #2c3e50; color: white;">Total</td>';
            echo '<td style="width: 33.3333%; height: 18px; text-align: center; background-color: #2c3e50; color: white;">' . $total_insured_name_all . '</td>';
            echo '<td style="width: 33.3333%; height: 18px; text-align: center; background-color: #2c3e50; color: white;">100%</td>';
            echo '</tr>';
            ?>
        </tbody>


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
WHERE `Date Month` IN ($bulanKondisi) 
GROUP BY `Date Month`, dateyear -- Menambahkan dateyear ke GROUP BY
ORDER BY `Date Month` ASC";

        // Eksekusi query
        $result = mysqli_query($koneksi, $sql);


        // Cek apakah hasil query tidak kosong
        $date_month_terbanyak = mysqli_fetch_assoc($result);

        // Total semua polis yang diterima (untuk menghitung persentase)
        $sql_total = "SELECT COUNT(*) AS `TotalAll` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
        $result_total = mysqli_query($koneksi, $sql_total);
        $total_insured_name_all = mysqli_fetch_assoc($result_total)['TotalAll'];
        ?>

        <p>1. Berdasarkan jumlah polis yang dimiliki oleh setiap nasabah adalah sebagai berikut:</p>
        <ul>
            <?php
            // Query untuk mendapatkan data tambahan (misalnya untuk nomor polis dan provinsi)
            $sql_detail = "SELECT `Date Month`, `Nomor Polis`, `Provinsi`, `UP` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC"; // Ambil semua data yang diperlukan
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

            // Menemukan bulan dengan jumlah entri terbanyak
            $max_date_month_terbanyak = array_keys($result_array, max($result_array))[0]; // Mendapatkan kunci (bulan) dengan nilai terbanyak
            $max_total_entries = max($result_array); // Mendapatkan nilai terbanyak

            // Menampilkan hasil
            echo '<li>Bulan dengan jumlah polis terbanyak adalah ' . $max_date_month_terbanyak .
                ' dengan total ' . number_format($max_total_entries, 0, ',', '.') . ' polis (' .
                number_format(round(($max_total_entries / $total_entries_all) * 100), 0, '.', ',') .
                '% dari total keseluruhan polis).</li>';
            ?>
        </ul>


        <ul>
            <?php
            include 'koneksi.php'; // Pastikan koneksi ke database

            // Ambil nama client dari array $client
            $client_name = $client['name'];

            // Tentukan tabel yang akan digunakan berdasarkan nama client
            if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                $tabel = 'allianz';
            } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                $tabel = 'msig';
            } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                $tabel = 'generali';
            } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                $tabel = 'bri';
            } else {
                die('client_name tidak ditemukan');
            }

            // Ambil periode dari database
            $periode_sql = "SELECT periode FROM document WHERE id = $id";
            $periode_result = mysqli_query($koneksi, $periode_sql);
            $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

            // Cek apakah periode diambil dengan benar
            if ($periode === null) {
                die("Periode tidak ditemukan untuk ID: $id");
            }

            // Pecah periode menjadi array berdasarkan tanda pemisah " - "
            $bulanDipilih = explode(' - ', $periode);

            // Buat klausa WHERE untuk `Date Month` berdasarkan bulan dalam $bulanDipilih
            $bulanKondisi = "'" . implode("', '", $bulanDipilih) . "'";

            // Query untuk mendapatkan data tambahan (misalnya untuk nomor polis dan provinsi)
            $sql_detail = "SELECT `Date Month`, `Nomor Polis`, `Provinsi`, `UP`, `Klaim Yang Diajukan` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC"; // Ambil semua data yang diperlukan
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
                number_format(round(($min_total_entries / $total_entries_all) * 100), 0, '.', ',') .
                '% dari total keseluruhan polis).</li>';
            ?>


        </ul>

        <p>2. Adapun top 3 wilayah dengan Total Uang Pertanggungan terbesar adalah sebagai berikut:</p>
        <ul>
            <?php
            // Reset pointer result detail
            mysqli_data_seek($result_detail, 0); // Kembali ke awal hasil untuk digunakan kembali

            // Kalkulasi "UP" dan "Klaim Yang Diajukan" dari semua provinsi lalu sortir 3 terbesar dari kalkulasi datanya
            $result_array = [];
            while ($item = mysqli_fetch_assoc($result_detail)) {
                if (isset($item['Provinsi']) && (isset($item['UP']) || isset($item['Klaim Yang Diajukan']))) {
                    // Mendapatkan nilai UP dan Klaim Yang Diajukan, jika tidak ada, set nilai 0
                    $up = (int)($item['UP'] ?? 0);
                    $klaim_yang_diajukan = (int)($item['Klaim Yang Diajukan'] ?? 0);

                    // Menghitung total dari kedua kolom UP dan Klaim Yang Diajukan
                    $total = $up + $klaim_yang_diajukan;

                    // Jika provinsi belum ada dalam array, inisialisasi dengan 0
                    if (!isset($result_array[$item['Provinsi']])) {
                        $result_array[$item['Provinsi']] = 0;
                    }

                    // Menambahkan total ke provinsi yang sesuai
                    $result_array[$item['Provinsi']] += $total;
                }
            }

            // Mengurutkan hasil berdasarkan total UP + Klaim Yang Diajukan terbesar
            arsort($result_array);

            // Ambil 3 provinsi teratas
            $top3_provinsi = array_slice($result_array, 0, 3, true);

            // Hitung total UP + Klaim Yang Diajukan untuk seluruh provinsi (untuk persentase)
            $total_up_all = array_sum($result_array);

            // Menampilkan hasil untuk 3 provinsi teratas
            foreach ($top3_provinsi as $provinsi => $total_uang_pertanggungan) {
                echo '<li>' . $provinsi . ' dengan total UP Rp ' . number_format($total_uang_pertanggungan, 0, ',', '.') . ' (' . number_format(round(($total_uang_pertanggungan / $total_up_all) * 100), 0, '.', ',') . '% dari total keseluruhan UP).</li>';
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
        if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
            $tabel = 'allianz';
        } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
            $tabel = 'msig';
        } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
            $tabel = 'generali';
        } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
            $tabel = 'bri';
        } else {
            die('client_name tidak ditemukan');
        }

        // Query untuk mendapatkan data
        $sql = "SELECT `Claim Type`, MIN(`Date Month`) AS `Earliest Month`, COUNT(*) AS Jumlah 
        FROM $tabel 
        WHERE `Date Month` IN ($bulanKondisi) 
        GROUP BY `Claim Type` 
        ORDER BY `Earliest Month` ASC";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil) {
            die('Query error: ' . mysqli_error($koneksi));
        }

        // Data untuk chart
        $data_chart = array();
        while ($baris = mysqli_fetch_assoc($hasil)) {
            if (isset($baris['Claim Type']) && isset($baris['Jumlah'])) {
                $claim_type = trim($baris['Claim Type']);
                if (!isset($data_chart[$claim_type])) {
                    $data_chart[$claim_type] = 0;
                }
                $data_chart[$claim_type] += (int)$baris['Jumlah'];
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
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                type: 'column', // Gunakan tipe 'column' agar grafik vertikal
                backgroundColor: '#D3D3D3'
            },
            title: {
                text: 'Jenis Klaim Yang Diinvestigasi (Cases)'
            },
            xAxis: {
                categories: <?php echo json_encode($jenis_claim); ?>,
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
                        enabled: true,
                        inside: true, // Menampilkan label di dalam batang, ubah ke false jika ingin di atas
                        verticalAlign: 'middle', // Untuk menempatkan label di tengah batang
                        style: {
                            color: '#FFFFFF', // Ubah warna label ke putih agar kontras di dalam batang
                            textOutline: '1px contrast' // Outline teks agar terlihat lebih jelas
                        },
                        format: '{point.y}' // Menampilkan jumlah kasus tanpa persentase
                    },
                    pointPadding: 0.2,
                    borderWidth: 0
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
                data: <?php echo $chart_data_json; ?>
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

        <h2>Total Jenis Klaim</h2>
        <table>
            <thead>
                <tr>
                    <th>Jenis Klaim</th>
                    <th>kasus</th>
                    <th>%kasus</th>
                    <th>Total UP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $client_name = $client['name'];
                if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                    $tabel = 'generali';
                } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                    $tabel = 'bri';
                } else {
                    die('client_name tidak ditemukan');
                }

                $sql = "SELECT * FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
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
                        $persentase = (count($hasilArray) > 0) ? round(($value / count($hasilArray)) * 100) : 0;

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
        <p>Adapun jenis klaim yang telah dilakukan investigasi berdasarkan jumlah polis adalah sebagai
            berikut:</p>
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
            if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                $tabel = 'allianz';
            } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                $tabel = 'msig';
            } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                $tabel = 'generali';
            } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                $tabel = 'bri';
            } else {
                die('client_name tidak ditemukan');
            }

            $sql = "SELECT * FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
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
                foreach ($klaimTypes as $type => $label) {
                    // Hitung jumlah klaim untuk tipe ini
                    if (isset($jenisKlaim[$type])) {
                        $jumlahKlaim = $jenisKlaim[$type];
                        $persentase = round(($jumlahKlaim / $jumlahPolis) * 100);

                        echo "$label sebanyak $jumlahKlaim Polis (atau $persentase% dari total $jumlahPolis Polis).<br>";
                    }
                }

                // Kesimpulan berdasarkan jenis klaim terbanyak
                $jenisKlaimTerbanyak = key($jenisKlaim); // Mendapatkan kunci dari jenis klaim dengan jumlah terbanyak
                $jumlahTerbanyak = $jenisKlaim[$jenisKlaimTerbanyak];
                $persentaseTerbanyak = round(($jumlahTerbanyak / $jumlahPolis) * 100);

                // Menampilkan kesimpulan
                echo "Dari informasi tersebut dapat ditarik kesimpulan jika kasus klaim paling banyak adalah " .
                    (isset($klaimTypes[$jenisKlaimTerbanyak]) ? $klaimTypes[$jenisKlaimTerbanyak] : 'Unknown') . ", yaitu $persentaseTerbanyak% dari total Polis yang dilakukan investigasi.";

                // Menutup hasil
                $hasil->free();
            } else {
                echo "Query error: " . $mysqli->error;
            }

            // Menutup koneksi
            $mysqli->close();
            ?>
            <div class="content">
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
                <div id="tatChart" style="width:100%; height:320px;"></div>

                <h2>SLA Investigasi (Policy Level)</h2>
                <div id="slaChart" style="width:100%; height:320px;"></div>


                <!-- Bagian JavaScript untuk Chart -->
                <?php
                $periode_sql = "SELECT periode FROM document WHERE id = $id";
                $periode_result = mysqli_query($koneksi, $periode_sql);
                $periode = mysqli_fetch_array($periode_result)['periode'];

                // Pecah periode menjadi array berdasarkan tanda pemisah " - "
                $bulanDipilih = explode(' - ', $periode);

                // Buat klausa WHERE untuk Date Month berdasarkan bulan dalam $bulanDipilih
                $bulanKondisi = "'" . implode("', '", $bulanDipilih) . "'";

                // Query untuk mengambil kolom 'Claim Type' dan 'TAT' dari tabel
                $sql = "SELECT `Claim Type`, `TAT` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
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

                // Menghitung rata-rata TAT untuk setiap Claim Type dengan pembulatan
                $tatAchievementData = [];
                foreach ($claimTypes as $claimType) {
                    $rataRataTat = $tatData[$claimType] / $tatCounts[$claimType]; // rata-rata TAT per Claim Type
                    $bulatkan = (int)round($rataRataTat); // membulatkan ke atas jika >= 0.5
                    $tatAchievementData[] = $bulatkan;
                }

                // Menghitung rata-rata keseluruhan untuk garis TAT Average
                $averageTatAchievement = (count($tatAchievementData) > 0) ? round(array_sum($tatAchievementData) / count($tatAchievementData)) : 0;
                $tatAverageData = array_fill(0, count($claimTypes), $averageTatAchievement);

                // Mengonversi data ke format JSON untuk digunakan di JavaScript
                $claimTypesJSON = json_encode($claimTypes);
                $tatAchievementDataJSON = json_encode($tatAchievementData);
                $tatAverageDataJSON = json_encode($tatAverageData);
                ?>


                <!-- Kode HTML dan JavaScript untuk Grafik -->
                <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', function() {
                    // Chart 1: TAT Investigasi (Days)
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
                            y: 0
                        },
                        plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true,
                                    inside: true, // Tampilkan di dalam batang
                                    style: {
                                        color: '#FFFFFF', // Warna putih untuk kontras
                                        textOutline: '1px contrast'
                                    }
                                }
                            },
                            line: {
                                dataLabels: {
                                    enabled: true,
                                    align: 'center', // Posisi di tengah data point
                                    verticalAlign: 'bottom', // Posisi label di atas garis
                                    style: {
                                        color: 'black', // Ubah warna untuk kontras
                                        fontSize: '10px'
                                    }
                                },
                                enableMouseTracking: false // Nonaktifkan interaksi mouse untuk garis
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
                            data: <?php echo json_encode(array_fill(0, count(json_decode($claimTypesJSON)), 14)); ?>,
                            color: 'yellow',
                            dashStyle: 'Dash',
                            marker: {
                                enabled: false
                            }
                        }]
                    });

                    <?php
                        // Tentukan tabel berdasarkan client name
                        $client_name = $client['name'];
                        if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                            $tabel = 'allianz';
                        } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                            $tabel = 'msig';
                        } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                            $tabel = 'generali';
                        } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                            $tabel = 'bri';
                        } else {
                            die('client_name tidak ditemukan');
                        }

                        $periode_sql = "SELECT periode FROM document WHERE id = $id";
                        $periode_result = mysqli_query($koneksi, $periode_sql);
                        $periode = mysqli_fetch_array($periode_result)['periode'];

                        // Pecah periode menjadi array berdasarkan tanda pemisah " - "
                        $bulanDipilih = explode(' - ', $periode);

                        // Buat klausa WHERE untuk `Date Month` berdasarkan bulan dalam $bulanDipilih
                        $bulanKondisi = "'" . implode("', '", $bulanDipilih) . "'";

                        // Query untuk mendapatkan data TAT dari tabel
                        $sql = "SELECT `TAT` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
                        $result = mysqli_query($koneksi, $sql);
                        if (!$result) {
                            die('Query error: ' . mysqli_error($koneksi));
                        }

                        // Inisialisasi variabel untuk menghitung jumlah kategori
                        $under14Days = 0;
                        $over14Days = 0;
                        $totalCount = 0; // Untuk menghitung jumlah total TAT

                        // Loop untuk memisahkan data kategori berdasarkan nilai TAT
                        while ($row = mysqli_fetch_assoc($result)) {
                            $tat = (int)$row['TAT']; // Ambil nilai TAT dan konversi ke integer
                            $totalCount++; // Menambah total count

                            // Menambahkan ke kategori berdasarkan nilai TAT
                            if ($tat <= 14) {
                                $under14Days++;
                            } else {
                                $over14Days++;
                            }
                        }

                        // Menghitung rata-rata SLA untuk setiap kategori
                        $averageSLA = ($totalCount > 0) ? (int)(($under14Days + $over14Days) / $totalCount * 14) : 0;
                        $averageSLAData = array_fill(0, 2, $averageSLA); // Mengisi nilai rata-rata SLA untuk setiap kategori

                        // Menyusun data untuk chart
                        $categories = ['Under 14 Days', 'More than 14 Days'];
                        $dataChart = [$under14Days, $over14Days];

                        // Mengonversi data ke format JSON untuk digunakan di JavaScript
                        $categoriesJSON = json_encode($categories);
                        $dataChartJSON = json_encode($dataChart);
                        $averageSLADataJSON = json_encode($averageSLAData);
                        ?>


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
                        plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true,
                                    inside: true, // Tampilkan di dalam batang
                                    style: {
                                        color: '#FFFFFF', // Warna putih untuk kontras
                                        textOutline: '1px contrast'
                                    }
                                }
                            },
                            line: {
                                dataLabels: {
                                    enabled: true,
                                    align: 'center', // Posisi di tengah data point
                                    verticalAlign: 'bottom', // Posisi label di atas garis
                                    style: {
                                        color: 'black', // Ubah warna untuk kontras
                                        fontSize: '10px'
                                    }
                                },
                                enableMouseTracking: false // Nonaktifkan interaksi mouse untuk garis
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
                            dashStyle: 'Dash',
                            marker: {
                                enabled: true
                            }
                        }]
                    });
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
                        $periode_sql = "SELECT periode FROM document WHERE id = $id";
                        $periode_result = mysqli_query($koneksi, $periode_sql);
                        $periode = mysqli_fetch_array($periode_result)['periode'];

                        // Pecah periode menjadi array berdasarkan tanda pemisah " - "
                        $bulanDipilih = explode(' - ', $periode);

                        // Buat klausa WHERE untuk `Date Month` berdasarkan bulan dalam $bulanDipilih
                        $bulanKondisi = "'" . implode("', '", $bulanDipilih) . "'";

                        // Query to select data based on your conditions from the specified table
                        $sql = "SELECT `TAT` FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
                        $result = mysqli_query($koneksi, $sql);

                        if (!$result) {
                            die('Query error: ' . mysqli_error($koneksi));
                        }

                        // Variables to count cases and total days for each category
                        $under14DaysCount = 0;
                        $over14DaysCount = 0;
                        $totalDaysUnder14 = 0;
                        $totalDaysOver14 = 0;

                        // Loop to count and sum days based on criteria
                        while ($row = mysqli_fetch_assoc($result)) {
                            $tat = $row['TAT'];
                            if ($tat <= 14) {
                                $under14DaysCount++;
                                $totalDaysUnder14 += $tat;
                            } else {
                                $over14DaysCount++;
                                $totalDaysOver14 += $tat;
                            }
                        }

                        // Calculate averages
                        $under14DaysAverage = ($under14DaysCount > 0) ? round($totalDaysUnder14 / $under14DaysCount) : 0;
                        $over14DaysAverage = ($over14DaysCount > 0) ? round($totalDaysOver14 / $over14DaysCount) : 0;
                        ?>

                        <!-- Table rows for each TAT category -->
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
                if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                    $tabel = 'generali';
                } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                    $tabel = 'bri';
                } else {
                    die('client_name tidak ditemukan');
                }

                // Query to count distinct Nomor Polis
                $sql_polis_count = "SELECT COUNT(DISTINCT `Nomor Polis`) AS total_polis FROM $tabel WHERE `Date Month` IN ($bulanKondisi) ORDER BY `Date Month` ASC";
                $result_polis_count = mysqli_query($koneksi, $sql_polis_count);

                if (!$result_polis_count) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                $row_polis_count = mysqli_fetch_assoc($result_polis_count);
                $total_polis = $row_polis_count['total_polis'];

                // Query to calculate average TAT per claim type
                $sql = "SELECT `Date Month`, `Claim Type`, AVG(TAT) AS avg_tat 
        FROM $tabel WHERE `Date Month` IN ($bulanKondisi) 
        GROUP BY `Date Month`, `Claim Type`";
                $result = mysqli_query($koneksi, $sql);

                if (!$result) {
                    die('Query error: ' . mysqli_error($koneksi));
                }

                // Initialize variables to store TAT values
                $tat_data = [];

                // Fetch data and assign it to the respective claim type
                while ($row = mysqli_fetch_assoc($result)) {
                    $date_month = $row['Date Month'];
                    $claim_type = $row['Claim Type'];
                    $avg_tat = round($row['avg_tat']);

                    if (!isset($tat_data[$date_month])) {
                        $tat_data[$date_month] = [
                            'CI' => null,
                            'DC' => null,
                            'HS' => null,
                            'TPD' => null
                        ];
                    }

                    // Assign the average TAT to the correct claim type
                    $tat_data[$date_month][$claim_type] = $avg_tat;
                }
                ?>
                <ol>
                    <li>Periode: <?php echo implode(', ', $bulanDipilih); ?></li>
                    <li>Rata-rata TAT untuk <?php echo $total_polis; ?> polis adalah sebagai berikut:</li>
                </ol>
                <ul>
                    <?php foreach ($tat_data as $date_month => $claim_types) : ?>
                    <?php
                        // Check if there's any non-null value in $claim_types
                        if (array_filter($claim_types)) :
                        ?>
                    <li><?php echo $date_month; ?>:</li>
                    <ul>
                        <?php if ($claim_types['CI'] !== null) : ?>
                        <li>Klaim critical illness (CI) selama <?php echo $claim_types['CI']; ?> hari kalender.
                        </li>
                        <?php endif; ?>
                        <?php if ($claim_types['DC'] !== null) : ?>
                        <li>Klaim meninggal (DC) selama <?php echo $claim_types['DC']; ?> hari kalender.</li>
                        <?php endif; ?>
                        <?php if ($claim_types['HS'] !== null) : ?>
                        <li>Klaim HS (Hospital) selama <?php echo $claim_types['HS']; ?> hari kalender.</li>
                        <?php endif; ?>
                        <?php if ($claim_types['TPD'] !== null) : ?>
                        <li>Klaim TPD selama <?php echo $claim_types['TPD']; ?> hari kalender.</li>
                        <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>


            <p>&nbsp;</p>
            <div class="content">
                <div class="page-break"></div>
                <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                </p>
                <?php
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $sql = "SELECT * FROM analisa_tat WHERE id = '$id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $counter = 3;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>$counter. " . nl2br(htmlspecialchars($row['tat'])) . "</p>";
                        $counter++;
                    }
                } else {
                    echo "";
                }
                ?>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong>4. HASIL INVESTIGASI</strong></p>
                <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
                <div id="chart2" style="width:100%; height:400px;"></div>
                <?php
                // Koneksi ke database
                include 'koneksi.php';

                // Tentukan tabel berdasarkan nama client
                $client_name = $client['name'];
                if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                    $tabel = 'generali';
                } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                    $tabel = 'bri';
                } else {
                    die('client_name tidak ditemukan');
                }

                // Ambil periode dari tabel document berdasarkan ID
                $periode_sql = "SELECT periode FROM document WHERE id = $id";
                $periode_result = mysqli_query($koneksi, $periode_sql);
                $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

                // Cek apakah periode diambil dengan benar
                if ($periode === null) {
                    die("Periode tidak ditemukan untuk ID: $id");
                }

                // Proses periode menjadi array bulan
                $bulan_periode = !empty($periode) ? explode(' - ', $periode) : [];

                // Siapkan kondisi bulan untuk query
                $bulanKondisi = "'" . implode("', '", $bulan_periode) . "'";

                // Query untuk menarik data berdasarkan `Date Month` dalam periode
                $query = "SELECT result, COUNT(*) as cases_count FROM $tabel WHERE `Date Month` IN ($bulanKondisi) GROUP BY result ORDER BY result ASC";
                $result = mysqli_query($koneksi, $query);

                // Cek hasil query
                if (!$result) {
                    die("Query gagal: " . mysqli_error($koneksi));
                }

                // Inisialisasi variabel untuk kategori dan data
                $categories = array();
                $data_cases = array();
                $data_percent = array();

                // Memasukkan data dari database ke array dan menghitung total kasus
                $total_cases = 0;
                while ($row = mysqli_fetch_assoc($result)) {
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
                        text: 'Hasil Investigasi'
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
                    plotOptions: {
                        column: {
                            dataLabels: {
                                enabled: true,
                                formatter: function() {
                                    return this.y;
                                }
                            }
                        },
                        spline: {
                            dataLabels: {
                                enabled: true,
                                formatter: function() {
                                    return this.y + '%';
                                }
                            }
                        }
                    },
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

                // Tentukan tabel berdasarkan nama client
                $client_name = $client['name'];
                if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                    $tabel = 'generali';
                } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                    $tabel = 'bri';
                } else {
                    die('client_name tidak ditemukan');
                }

                // Ambil ID dari GET dan ambil periode dari tabel document berdasarkan ID
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $periode_sql = "SELECT periode FROM document WHERE id = $id";
                $periode_result = mysqli_query($koneksi, $periode_sql);
                $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

                // Cek apakah periode diambil dengan benar
                if ($periode === null) {
                    die("Periode tidak ditemukan untuk ID: $id");
                }

                // Proses periode menjadi array bulan
                $bulan_periode = !empty($periode) ? explode(' - ', $periode) : [];

                // Siapkan kondisi bulan untuk query
                $bulanKondisi = "'" . implode("', '", $bulan_periode) . "'";

                // Query untuk mendapatkan total nomor polis dalam periode
                $sql_total = "SELECT COUNT(*) AS TotalPolis FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
                $result_total = mysqli_query($koneksi, $sql_total);
                $total_nomor_polis_all = mysqli_fetch_assoc($result_total)['TotalPolis'];

                // Query untuk mendapatkan data dari kolom 'Result' dalam periode
                $sql_result = "SELECT Result FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
                $result = mysqli_query($koneksi, $sql_result);

                // Menghitung jumlah kasus berdasarkan nilai 'Result'
                $result_array = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $result_name = $row['Result'];
                    $result_array[$result_name] = isset($result_array[$result_name]) ? $result_array[$result_name] + 1 : 1;
                }

                // Tentukan urutan hasil berdasarkan preferensi yang telah ditentukan
                $result_order = ['PEC', 'Fraud', 'Re Underwriting', 'Batal Polis', 'Second Opinion', 'No Finding', 'On Going'];

                // Fungsi untuk mengurutkan array berdasarkan urutan yang telah ditentukan
                uksort($result_array, function ($a, $b) use ($result_order) {
                    $a_index = array_search($a, $result_order);
                    $b_index = array_search($b, $result_order);

                    // Jika tidak ditemukan, set posisi terakhir
                    if ($a_index === false) $a_index = count($result_order);
                    if ($b_index === false) $b_index = count($result_order);

                    return $a_index - $b_index;
                });

                // Tampilan bagian pertama
                echo "<ol>";
                echo "<li>Adapun temuan hasil investigasi berdasarkan jumlah polis, diperoleh data sebagai berikut:</li>";
                echo "</ol>";
                echo "<ul>";

                foreach ($result_array as $result_name => $total) {
                    echo '<li>' . $result_name . ' sebanyak ' . $total . ' kasus (atau ' . number_format(round(($total / $total_nomor_polis_all) * 100), 0, '.', ',') . '% dari total ' . $total_nomor_polis_all . ' polis).</li>';
                }

                echo "</ul>";
                echo "<br>";

                // Menampilkan bagian kedua
                // Query untuk mendapatkan total nasabah dan polis sesuai dengan ID
                $sql = "SELECT * FROM analisa_hasil_investigasi WHERE id = '$id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<ol start='2'>";
                        echo "<li>" . nl2br(htmlspecialchars($row['hasil_investigasi'])) . "</li>";
                        echo "</ol>";
                    }
                } else {
                    echo "";
                }
                ?>
            </div>


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

        // Tentukan tabel berdasarkan nama client
        $client_name = $client['name'];
        if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
            $tabel = 'allianz';
        } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
            $tabel = 'msig';
        } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
            $tabel = 'generali';
        } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
            $tabel = 'bri';
        } else {
            die('client_name tidak ditemukan');
        }

        // Ambil ID dari GET dan ambil periode dari tabel document berdasarkan ID
        $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
        $periode_sql = "SELECT periode FROM document WHERE id = $id";
        $periode_result = mysqli_query($koneksi, $periode_sql);
        $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

        // Cek apakah periode diambil dengan benar
        if ($periode === null) {
            die("Periode tidak ditemukan untuk ID: $id");
        }

        // Proses periode menjadi array bulan
        $bulan_periode = !empty($periode) ? explode(' - ', $periode) : [];
        $bulanKondisi = "'" . implode("', '", $bulan_periode) . "'";  // Siapkan kondisi bulan untuk query

        // Query untuk mengambil semua provinsi dari database berdasarkan periode
        $sql_provinsi = "SELECT DISTINCT provinsi FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
        $result_provinsi = mysqli_query($koneksi, $sql_provinsi);

        if (!$result_provinsi) {
            die('Query error: ' . mysqli_error($koneksi));
        }

        // Inisialisasi array provinsi
        $provinsi = array();
        while ($row = mysqli_fetch_assoc($result_provinsi)) {
            $provinsi[] = $row['provinsi'];
        }

        // Cek jika tidak ada data provinsi ditemukan
        if (empty($provinsi)) {
            die('Tidak ada data provinsi yang ditemukan.');
        }

        // Query untuk mengambil kategori temuan yang dinamis berdasarkan periode
        $sql_categories = "SELECT DISTINCT result FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
        $result_categories = mysqli_query($koneksi, $sql_categories);

        if (!$result_categories) {
            die('Query error: ' . mysqli_error($koneksi));
        }

        // Inisialisasi array untuk kategori temuan
        $categories = array();
        while ($row = mysqli_fetch_assoc($result_categories)) {
            $categories[] = $row['result'];
        }

        // Inisialisasi data series untuk setiap kategori
        $data_series = array();
        foreach ($categories as $category) {
            $data_series[$category] = array_fill(0, count($provinsi), 0);
        }

        // Query untuk mengambil data sesuai dengan provinsi dan kategori temuan berdasarkan periode
        foreach ($categories as $category) {
            $sql = "SELECT provinsi, COUNT(*) as cases_count 
                FROM $tabel 
                WHERE result = '$category' AND `Date Month` IN ($bulanKondisi) 
                GROUP BY provinsi";
            $result = mysqli_query($koneksi, $sql);

            if (!$result) {
                die('Query error: ' . mysqli_error($koneksi));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $provinsi_index = array_search($row['provinsi'], $provinsi);  // Temukan index provinsi
                if ($provinsi_index !== false) {
                    $data_series[$category][$provinsi_index] = (int)$row['cases_count'];  // Simpan jumlah kasus
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
                    grouping: true, // Memisahkan setiap temuan
                    dataLabels: {
                        enabled: true,
                        formatter: function() {
                            return this.y > 0 ? this.y :
                                null; // Hanya tampilkan jika nilainya lebih besar dari 0
                        }
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
                    color: Highcharts.getOptions().colors[" . array_search($category, $categories) . "], // Memilih warna berbeda untuk setiap kategori
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
        $sql = "SELECT * FROM analisa_sebaran_wilayah_hasil_investigasi WHERE id = '$id'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>$counter.</strong> " . nl2br(htmlspecialchars($row['analisa'])) . "</p>";
                $counter++;
            }
        } else {
            echo "";
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
            width: 100%;
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


        <h2>Hasil Investigasi</h2>

        <table class="up">
            <thead>
                <tr>
                    <th>Hasil Investigasi</th>
                    <th>Jumlah UP (Rp)</th>
                    <th>%Jumlah UP</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database
                include 'koneksi.php';

                // Tentukan tabel berdasarkan nama client
                $client_name = $client['name'];
                if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                    $tabel = 'allianz';
                } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                    $tabel = 'msig';
                } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                    $tabel = 'generali';
                } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                    $tabel = 'bri';
                } else {
                    die('client_name tidak ditemukan');
                }

                // Ambil periode dari tabel document berdasarkan ID
                $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
                $periode_sql = "SELECT periode FROM document WHERE id = $id";
                $periode_result = mysqli_query($koneksi, $periode_sql);
                $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

                // Cek apakah periode diambil dengan benar
                if ($periode === null) {
                    die("Periode tidak ditemukan untuk ID: $id");
                }

                // Proses periode menjadi array bulan
                $bulan_periode = !empty($periode) ? explode(' - ', $periode) : [];
                $bulanKondisi = "'" . implode("', '", $bulan_periode) . "'";  // Siapkan kondisi bulan untuk query

                // SQL query to fetch data from the selected table with date filter
                $sql = "SELECT * FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
                $result = mysqli_query($koneksi, $sql);
                if (!$result) {
                    die('Query error: ' . mysqli_error($koneksi));
                }
                $remarks_result = mysqli_query($koneksi, "SELECT * FROM remarks");
                $remarks = [];
                while ($row = mysqli_fetch_assoc($remarks_result)) {
                    $remarks[$row['result_type']] = $row['remark'];
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

                        // Remove commas and dots from 'UP' and 'Klaim Yang Diajukan', then convert to integers
                        $up = !empty($value['UP']) ? intval(str_replace([',', '.'], '', $value['UP'])) : 0;
                        $klaim = !empty($value['Klaim Yang Diajukan']) ? intval(str_replace([',', '.'], '', $value['Klaim Yang Diajukan'])) : 0;

                        // Accumulate UP and Klaim
                        $total_up = $up + $klaim;
                        $total_up_all += $total_up; // Total UP for all results

                        // Get the result type
                        $result_type = trim($value['Result']); // Removed strtolower

                        // Initialize the result type if not already done
                        if (!isset($total_up_by_result[$result_type])) {
                            $total_up_by_result[$result_type] = 0;
                        }

                        // Accumulate UP for this result type
                        $total_up_by_result[$result_type] += $total_up;
                    }
                }

                // Display the table with the calculated UP for each result type in specified order
                $result_order = ['PEC', 'Fraud', 'Re Underwriting', 'Batal Polis', 'Second Opinion', 'No Finding', 'On Going'];
                foreach ($result_order as $result_type) {
                    if (isset($total_up_by_result[$result_type])) {
                        $total_up = $total_up_by_result[$result_type];
                        // Calculate percentage for this result type
                        if ($total_up_all > 0) {
                            $percentage = round(($total_up / $total_up_all) * 100, 2);
                        } else {
                            $percentage = 0.00;
                        }

                        echo '<tr>';
                        echo '<td>' . ucfirst($result_type) . '</td>';
                        echo '<td>' . number_format($total_up) . '</td>';
                        echo '<td>' . $percentage . '%</td>';
                        // Ambil remark dari array $remarks berdasarkan result_type, jika tidak ada tampilkan default
                        $remark = $remarks[$result_type] ?? 'Remark tidak tersedia';
                        echo '<td>' . $remark . '</td>';
                        echo '</tr>';
                    }
                }
                ?>


                <tr>
                    <th>Total</th>
                    <th><?php echo number_format($total_up_all); ?></th>
                    <th><?php echo number_format(($total_up_all ? ($total_up_all / $total_up_all) * 100 : 0), 2); ?>%
                    </th>
                    <th></th>
                </tr>
            </tbody>
        </table>
        <p><strong>Analisa:</strong></p>
        <ol>
            <?php
            // Koneksi ke database
            include 'koneksi.php';

            // Tentukan tabel berdasarkan nama client
            $client_name = $client['name'];
            if ($client_name == 'PT. ASURANSI ALLIANZ LIFE INDONESIA') {
                $tabel = 'allianz';
            } else if ($client_name == 'PT. MSIG LIFE INSURANCE INDONESIA Tbk') {
                $tabel = 'msig';
            } else if ($client_name == 'PT. ASURANSI JIWA GENERALI INDONESIA') {
                $tabel = 'generali';
            } else if ($client_name == 'PT. ASURANSI BRI LIFE') {
                $tabel = 'bri';
            } else {
                die('client_name tidak ditemukan');
            }

            // Ambil periode dari tabel document berdasarkan ID
            $periode_sql = "SELECT periode FROM document WHERE id = $id";
            $periode_result = mysqli_query($koneksi, $periode_sql);
            $periode = mysqli_fetch_array($periode_result)['periode'] ?? null;

            // Cek apakah periode diambil dengan benar
            if ($periode === null) {
                die("Periode tidak ditemukan untuk ID: $id");
            }

            // Proses periode menjadi array bulan
            $bulan_periode = !empty($periode) ? explode(' - ', $periode) : [];
            $bulanKondisi = "'" . implode("', '", $bulan_periode) . "'";  // Siapkan kondisi bulan untuk query

            // Query untuk mengambil data hanya dalam periode yang ditentukan
            $sql = "SELECT * FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
            $result = mysqli_query($koneksi, $sql);

            // Cek hasil query
            if (!$result) {
                die('Query error: ' . mysqli_error($koneksi));
            }

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
                if (!empty($result_type) && $result_type != 'No Finding') {
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

            $total_temuan = 0;
            foreach ($result_counts as $type => $count) {
                if ($type != 'No Finding') {
                    $total_temuan += $count;
                }
            }

            $percentage_temuan = round(($total_kasus > 0) ? ($total_temuan / $total_kasus) * 100 : 0);
            $percentage_diselamatkan = round(($total_polis > 0) ? ($total_diselamatkan / $total_polis) * 100 : 0);

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
                Sehingga total ada <?php echo $total_temuan; ?> temuan yang dapat dijadikan sebagai
                dasar
                penolakan klaim
                (atau sekitar <?php echo number_format($percentage_temuan); ?>% dari total kasus yang
                dilakukan investigasi).</li>

            <li>Dari total uang pertanggungan polis <strong>Rp</strong>
                <strong><?php echo number_format($total_polis, 0, ',', '.'); ?></strong>
                yang berhasil diselamatkan dari proses investigasi atas <?php echo $total_temuan; ?>
                kasus
                tersebut adalah sebesar
                <strong>Rp <?php echo number_format($total_diselamatkan); ?>
                    (atau <?php echo number_format($percentage_diselamatkan); ?>% dari total kasus
                    yang
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
            $sql_total = "SELECT COUNT(DISTINCT `Nomor Polis`) AS total_all FROM $tabel WHERE `Date Month` IN ($bulanKondisi)";
            $result_total = mysqli_query($koneksi, $sql_total);
            $row_total = mysqli_fetch_assoc($result_total);
            $total_polis_all = $row_total['total_all'];

            // Query untuk mendapatkan provinsi dengan jumlah kasus investigasi terbanyak
            $sql = "SELECT Provinsi, COUNT(DISTINCT `Nomor Polis`) AS total FROM $tabel WHERE `Date Month` IN ($bulanKondisi) GROUP BY Provinsi ORDER BY total DESC LIMIT 1";
            $result = mysqli_query($koneksi, $sql);
            $row = mysqli_fetch_assoc($result);

            // Menghitung persentase
            $persentase = ($row['total'] / $total_polis_all) * 100;

            // Menampilkan hasil
            echo "<li>Wilayah dengan kasus investigasi terbanyak adalah wilayah " . htmlspecialchars($row['Provinsi']) .
                " yaitu sebanyak " . htmlspecialchars($row['total']) .
                " polis (atau " . number_format($persentase) . "% dari total polis).</li>";
            ?>

        </ol>
        <?php
        $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
        $sql = "SELECT * FROM kesimpulan WHERE id = '$id'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $counter = 2;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>$counter.</strong> " . nl2br(htmlspecialchars($row['kesimpulan'])) . "</p>";
                $counter++;
            }
        } else {
            echo "";
        }
        ?>
        <p>&nbsp;</p>
        <div class="page-break"></div>
        <p><img src="./img/dim.png" alt="" width="179" height="84" /></p>
        <p><strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <p>REKOMENDASI</p>
        <p>
            <strong>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</strong>
        </p>
        <p><strong>Bahwa berdasarkan kesimpulan akhir yang telah kami sampaikan
                sebelumnya, maka berikut
                ini
                kami
                sampaikan rekomendasi yang dapat diambil lebih lanjut:</strong></p>
        <?php
        $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
        $sql = "SELECT * FROM rekomendasi WHERE id = '$id'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>$counter.</strong> " . nl2br(htmlspecialchars($row['rekomendasi'])) . "</p>";
                $counter++;
            }
        } else {
            echo "";
        }
        ?>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

</html>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

</html>