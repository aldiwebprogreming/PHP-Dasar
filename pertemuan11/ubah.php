<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan?
if (isset($_POST["submit"])) {
	
	// cek apakah data berhasil diubah
	if(ubah($_POST) > 0){
		echo "
			<script>
				alert ('Data berhasil diubah :D');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert ('Maaf data gagal diubah :(');
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
		<title>Update Mahasiswa</title>
	</head>
<body>
	
<h1>Update Data Mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<table>
			<tbody>
				<tr>
					<th><label for="nrp">NRP: </label></th>
					<td><input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>"></td>
				</tr>
				<tr>
					<th><label for="nama">Nama: </label></th>
					<td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>"></td>
				</tr>
				<tr>
					<th><label for="email">Email: </label></th>
					<td><input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>"></td>
				</tr>
				<tr>
					<th><label for="jurusan">Jurusan: </label></th>
					<td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>"></td>
				</tr>
				<tr>
					<th><label for="gambar">Gambar: </label></th>
					<td><input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>"></td>
				</tr>
				<tr>
					<td><button type="submit" name="submit">Ubahkeun</button></td>
				</tr>
			</tbody>
		</table>
	</form>

</body>
</html>