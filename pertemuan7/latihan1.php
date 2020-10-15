<!-- super globals
$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV -->
<!-- variabel scope / lingkup variabel
$x = 10;

function tampilX(){
	// $x = 20;
	global $x;
	echo $x;
}
tampilX();
echo "<br><br>";
echo $x; -->
<!-- SUPERGLOBALS
variabel global mirip PHP
merupakan array associative
var_dump($_GET);
var_dump($_SERVER); -->
<!-- cara mengirim data ke halaman:
http://localhost/phpdasar/pertemuan7/latihan1.php?nama=Hanivan Rizky&nrp=20171203 -->
<!-- metode request-get adalah metode pengiriman data melalui url yang bisa ditangkap oleh $_GET -->
<?php
$mahasiswa = [
	[
		"nama" => "Hanivan Rizky Sobari",
		"nrp" => "20171203",
		"email" => "hanivan20@gmail.com",
		"jurusan" => "Teknik Komputer dan Jaringan",
		"gambar" => "1.png"
	],
	[
		"nama" => "Adam Firmansyah",
		"nrp" => "20220803",
		"email" => "adamfirmansyah@gmail.com",
		"jurusan" => "Multimedia",
		"gambar" => "2.jpg"
	],
];

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
		a {
			text-decoration: none;
			color: green;
		}
	</style>
<body>
	
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ($mahasiswa as $mhs) : ?>
	<li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a></li>
<?php endforeach; ?>
</ul>

</body>
</html>