<?php 
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) || 
	 !isset($_GET["nrp"]) ||
	 !isset($_GET["jurusan"]) ||
	 !isset($_GET["email"]) ||
	 !isset($_GET["gambar"]) ) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detail Mahasiswa</title>
	</head>
	<style>
		img {
			width: 100px;
			height: 100px;
		}
	</style>
<body>
	
<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["nrp"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1.php"><<</a>

</body>
</html>