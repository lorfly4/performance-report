<button><a href="user.php">back</a></button>
<?php
session_start(); 
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$role = $_POST['role'];
}

$sql1 = mysqli_query($koneksi,"SELECT * FROM user WHERE username");
if(mysqli_num_rows($sql1)>0){
	echo "<script>alert('maaf username telah di gunakan')</script>";
}else{
		$save = "INSERT INTO user set username='$username', password='$password', nama='$nama', role='$role'";
		mysqli_query($koneksi, $save);
		echo "<script>alert('berhasil input!')</script>";
	}

// $query = "INSERT INTO tb_karyawan set username='$username', password='$password', nama='$nama', tmp_tgl_lahir='$tmp_tgl_lahir', jenkel='$jenkel', agama='$agama', alamat='$alamat', no_tel='$no_tel', jabatan='$jabatan', foto='$fotobaru'";
// mysqli_query($koneksi, $query);

 ?>