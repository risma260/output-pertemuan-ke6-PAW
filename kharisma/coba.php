<?php

$koneksi = mysqli_connect("localhost","root","","data_mhs");

$sql="SELECT * FROM tbl_mhs";
$hasil=mysqli_query($koneksi,$sql);

while($baris=mysqli_fetch_assoc($hasil))
{
	echo "<br>nama mahasiswa : ".$baris['nama_mhs']." | alamat : ".$baris['alamat'];
}

?>