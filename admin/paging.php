<?php
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM user");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_user = mysqli_query($koneksi, "SELECT * FROM user LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal + 1;
while ($d = mysqli_fetch_array($data_user)) {
    ?>
<tr>
    <td style="text-align: center;"><?php echo $nomor++; ?></td>
    <td style="text-align: center;"><?php echo htmlspecialchars($d['nama']); ?></td>
    <td style="text-align: center;"><?php echo htmlspecialchars($d['username']); ?></td>
    <td style="text-align: center;"><?php echo htmlspecialchars($d['role']); ?></td>
    <td style="text-align: center;">
        <a href="user_edit.php?id=<?php echo htmlspecialchars($d['id']); ?>" class="btn btn-primary">EDIT</a>
        <a href=" hapus.php?id=<?php echo htmlspecialchars($d['id']); ?>"
            onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger">HAPUS</a>
    </td>
</tr>
<?php
}
?>