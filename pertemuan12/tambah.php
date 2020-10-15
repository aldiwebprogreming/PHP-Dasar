<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan?
if (isset($_POST["submit"])) {
	// cek apakah data berhasil ditambah
	if(tambah($_POST) > 0){
		echo "
			<script>
				alert ('Data berhasil ditambahkan :D');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert ('Maaf data yang anda masukkan salah :(');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tambah Mahasiswa</title>
	</head>
<body>
	
<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">
		<table>
			<tbody>
				<tr>
					<th><label for="nrp">NRP: </label></th>
					<td><input type="text" name="nrp" id="nrp" required></td>
				</tr>
				<tr>
					<th><label for="nama">Nama: </label></th>
					<td><input type="text" name="nama" id="nama"></td>
				</tr>
				<tr>
					<th><label for="email">Email: </label></th>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<th><label for="jurusan">Jurusan: </label></th>
					<td><input type="text" name="jurusan" id="jurusan"></td>
				</tr>
				<tr>
					<th><label for="gambar">Gambar: </label></th>
					<td><input type="text" name="gambar" id="gambar"></td>
				</tr>
				<tr>
					<td><button type="submit" name="submit">Tambahkeun</button></td>
				</tr>
			</tbody>
		</table>
	</form>

</body>
</html>