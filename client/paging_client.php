<?php
include '../koneksi.php';

$no = 1;
$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM client");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_user = mysqli_query($koneksi, "SELECT * FROM client LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal + 1;
while ($d = mysqli_fetch_array($data_user)) {
    ?>
<tr>
    <td style="text-align: center;"><?php echo htmlspecialchars($d['id']);?></td>
    <td style="text-align: center;"><?php echo htmlspecialchars($d['name']); ?></td>
    <td style="text-align: center;">

        <!-- <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"
            class="btn btn-danger">HAPUS</a>
        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">EDIT</a> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#detail<?php echo $d['id']; ?>">
            Detail
        </button>
    </td>
    <div class="modal fade" id="detail<?php echo $d['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="detailLabel<?php echo $d['id']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="detailLabel<?php echo $d['id']; ?>">Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Client ID:</strong> <?php echo htmlspecialchars($d['id']); ?></p>
                    <p><strong>Client name:</strong> <?php echo htmlspecialchars($d['name']); ?></p>
                    <p><strong>image:</strong>
                        <img src="./upload/<?php echo htmlspecialchars($d['image']); ?>" alt="Client Image" width="40px"
                            height="100px">
                    </p>

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
                </div>
            </div>
        </div>
    </div>
<tr>
    <?php
}
?>