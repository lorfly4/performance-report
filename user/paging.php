<?php
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM registrasi");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_user = mysqli_query($koneksi, "SELECT * FROM registrasi LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal + 1;
while ($d = mysqli_fetch_array($data_user)) {
    ?>
<tr>
    <td><?php echo $nomor++; ?></td>
    <td><?php echo htmlspecialchars($d['insured_name']); ?></td>
    <td><?php echo htmlspecialchars($d['customer_address']); ?></td>
    <td><?php echo htmlspecialchars($d['customer_dob']); ?></td>
    <td><?php echo  htmlspecialchars($d['investigator_name']);; ?></td>
    <td><?php echo htmlspecialchars($d['hospital_name']); ?></td>
    <!-- <td><?php echo htmlspecialchars($d['date_of_register']); ?></td> -->
    <td>

        <a href="" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger">HAPUS</a>
        <a href="" class="btn btn-primary">EDIT</a>
    </td>
<tr>
    <?php
}
?>