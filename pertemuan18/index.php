<?php 
require 'functions.php';
session_start();

if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}

//$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC"); // berisi array assoc rapih
// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa ORDER BY id DESC"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// halaman yang sedang aktif
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// jika ?halaman=0
if($halamanAktif == 0){
	header("Location: index.php");
}

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman"); // pagination, menampilkan data 5 buah

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
	<style>
		a {
			text-decoration: none;
			color: grey;
		}
		.tambah {
			color: black;
		}
	</style>
	</head>
<body>
	
<h1>Daftar Mahasiswa</h1>

<form action="" method="post">
	
	<input type="text" name="keyword" size="35" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari</button>
	<button type="submit"><a href="index.php">Refresh</a></button>

</form>
<br><br>
<a href="tambah.php" class="tambah"><button>Tambah data mahasiswa</button></a>
<a href="logout.php" class="logout"><button>Logout</button></a>

<!-- navigasi -->
<p>Halaman:
	<?php if($halamanAktif > 1) : ?> 
		<a href="?halaman=<?= $halamanAktif - 1; ?>"><button>&laquo;</button></a>
	<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
	<?php if($i == $halamanAktif ) : ?>
		<a href="?halaman=<?= $i; ?>"><button style="font-weight: bold; color: blue;"><?= $i; ?></button></a>
	<?php else : ?>
		<a href="?halaman=<?= $i; ?>"><button><?= $i; ?></button></a>
	<?php endif; ?>	
<?php endfor; ?>

	<?php if($halamanAktif < $jumlahHalaman) : ?> 
		<a href="?halaman=<?= $halamanAktif + 1; ?>"><button>&raquo;</button></a>
	<?php endif; ?>
</p>
<br>

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