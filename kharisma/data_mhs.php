<?php
$koneksi=mysqli_connect("localhost","root","","data_mhs");
$sqli="SELECT id_mhs,nama_mhs,nama_prodi,alamat 
FROM tbl_mhs,tbl_prodi 
WHERE tbl_mhs.id_prodi = tbl_prodi.id_prodi";

$hasil=mysqli_query($koneksi,$sqli);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA MAHASISWA TEKNIK</h2>
  <p>Data ini dari mysql</p>
  <button type="button" class="btn btn-primary">Tambah</button>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id_mhs</th>
        <th>nama_mhs</th>
        <th>prodi_mhs</th>
        <th>alamat_mhs</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($baris=mysqli_fetch_assoc($hasil)) {
      ?>
      <tr>
        <td><?php echo $baris['id_mhs']; ?></td>
        <td><?php echo $baris['nama_mhs']; ?></td>
        <td><?php echo $baris['nama_prodi']; ?></td>
        <td><?php echo $baris['alamat']; ?></td>
        <td>
          <button type="button" class="btn btn-sm btn-info">Edit</button>
          <button type="button" class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>