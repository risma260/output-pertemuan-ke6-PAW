<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Tambah Data Mahasiswa</title>
	<style type="text/css">
    body{
      background-image: url(pict/bg.jpg);
    }
    h1{
    	text-align: center;
    }
    .content{
    	margin-right: 500px;
    	margin-left: 500px;
    	background-color: steelblue;
    	height: 130px;
    	width: 325px;
    	padding: 25px;
    }
    </style>
</head>
<body>

<h1>Form Tambah Data Mahasiswa</h1>
<div class="content">
	<table>
		<form method="POST" action="action.php">
			<tr>
				<td>Id Prodi</td>
				<td>:</td>
				<td><input type="text" name="id_prodi"></td>
			</tr>
			<tr>
				<td>NIM Mahasiswa</td> 
				<td>:</td> 
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>:</td> 
				<td><input type="text" name="nama_mhs"></td>
			</tr>
			<tr>		
				<td>Alamat Mahasiswa</td> 
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>			
				<td><button type="submit">Kirim</button></td>
			</tr>
		</form>
	</table>
</div>
</body>
</html>