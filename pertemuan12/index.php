<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC"); // berisi array assoc rapih

// tombol cari ditekan
if(isset($_POST["cari"])){
	$mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Halaman Admin</title>
	</head>
<body>
	
<h1>Daftar Mahasiswa</h1>

<form action="" method="post">
	
	<input type="text" name="keyword" size="35" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari</button>

</form>
<br><br>
<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
<?php $i = 1; ?>
<?php foreach ($mahasiswa as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin Nihh??');" >hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" alt="pic. mahasiswa" width="50px;"></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>