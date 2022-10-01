<?php
$id_prodi = $_POST['id_prodi'];
$nim = $_POST['nim'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat'];

$koneksi = mysqli_connect("localhost","root","","data_mhs");
$sq = "INSERT INTO tbl_mhs VALUES(null,$id_prodi,$nim,'$nama','$alamat')";
$hasil=mysqli_query($koneksi,$sq);
if (!$hasil){
	echo "<h2>Eksekusi tambah data mahasiswa gagal</h2>";
}else{
	echo "<h2>Eksekusi tambah data mahasiswa berhasil<br>";
	echo "<a href='data_mhs.php'>Show data</a>";
}

?>