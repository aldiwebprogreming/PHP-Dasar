<?php 
// array associative
// key-nya = string yang kita buat sendiri
$mahasiswa = [
	[
		"nama" => "Hanivan Rizky Sobari",
		"nrp" => "20171203",
		"email" => "hanivan20@gmail.com",
		"jurusan" => "Teknik Komputer dan Jaringan",
		// "nilai" => [80, 90, 100]
		"gambar" => "1.png"
	],
	[
		"nama" => "Adam Firmansyah",
		"nrp" => "20220803",
		"email" => "adamfirmansyah@gmail.com",
		"jurusan" => "Multimedia",
		// "nilai" => [75, 85, 95]
		"gambar" => "2.jpg"
	],
];
// echo $mahasiswa[1]["nilai"][1];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>GET</title>
	</head>
	<style>
		img {
			width: 100px;
			height: 100px;
		}
	</style>
<body>	
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<img src="img/<?= $mhs["gambar"]; ?>">
		<li>Nama: <?= $mhs["nama"]; ?></li>
		<li>NRP: <?= $mhs["nrp"]; ?></li>
		<li>Jurusan: <?= $mhs["jurusan"]; ?></li>
		<li>Email: <?= $mhs["email"]; ?></li>
	</ul>
<?php endforeach; ?>

</body>
</html>