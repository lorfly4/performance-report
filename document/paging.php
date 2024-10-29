<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include '../koneksi.php';

    $no = 1;
    $batas = 10;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

    $data = mysqli_query($koneksi, "SELECT * FROM document");
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas);

    $data_user = mysqli_query($koneksi, "SELECT * FROM document LIMIT $halaman_awal, $batas");
    while ($d = mysqli_fetch_array($data_user)) {
    ?>
    <tr>
        <td style="text-align: center;"><?php echo $no++; ?></td>
        <?php
            $sql = "SELECT name FROM client WHERE id = '" . $d['client_id'] . "'";
            $result = mysqli_query($koneksi, $sql);
            $row = mysqli_fetch_row($result);
            ?>
        <td style="text-align: center;"><?php echo htmlspecialchars($row[0]); ?></td>
        <td style="text-align: center;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#detail<?php echo $d['id']; ?>">
                Detail
            </button>
        </td>
        <div class="modal fade" id="detail<?php echo $d['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="detailLabel<?php echo $d['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="detailLabel<?php echo $d['id']; ?>">Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Client Name:</strong> <?php echo htmlspecialchars($row[0]); ?></p>
                        <p><strong>Periode:</strong> <?php echo htmlspecialchars($d['periode']); ?></p>
                        <p><strong>Tanggal:</strong> <?php echo htmlspecialchars($d['tanggal']); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <a href="hapus.php?id=<?php echo htmlspecialchars($d['id']); ?>"
                                class="text-white text-decoration-none">Delete</a>
                        </button>
                        <button type="button" class="btn btn-primary">
                            <a href="edit.php?id=<?php echo htmlspecialchars($d['id']); ?>"
                                class="text-white text-decoration-none">Edit</a>
                        </button>
                        <button type="button" class="btn btn-primary">
                            <a href="../print.php?id=<?php echo htmlspecialchars($d['id']); ?>"
                                class="text-white text-decoration-none">Print</a>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Action
                            </button>


                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="analisa_top.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        analisa top 3 wilayah</a></li>
                                <li><a class="dropdown-item"
                                        href="analisa_tat.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        analisa turn around time</a></li>
                                <li><a class="dropdown-item"
                                        href="analisa_hasil_investigasi.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        analisa hasil investigasi</a></li>
                                <li><a class="dropdown-item"
                                        href="analisa_sebaran_wilayah_hasil_investigasi.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        analisa wilayah sebaran hasil investigasi</a></li>
                                <li><a class="dropdown-item"
                                        href="input_rekomendasi.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        Rekomendasi</a></li>
                                <li><a class="dropdown-item"
                                        href="input_kesimpulan.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        Kesimpulan</a></li>
                                <li><a class="dropdown-item"
                                        href="input_remarks.php?id=<?php echo htmlspecialchars($d['id']); ?>">Input
                                        Remarks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <tr>
        <?php
    }
        ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>