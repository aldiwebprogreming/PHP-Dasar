<?php
// syntaks php dasar
// standar output: echo, print, print_r(khusus untuk array), var_dump(untuk melihat isi dari variabel)
// print_r dan var_dump(expression) biasa digunakan untuk debugging
echo "Hanivan, dengan echo<br>"; // angka tidak perlu kutip, bisa boolean
print "Hanivan, dengan print<br>";
print_r("Hanivan, dengan print_r<br>");
var_dump("Hanivan, dengan var_dump: memberikan informasi type data, dan ukurannya<br><br><br>");

// Variabel dan Tipe Data
// Variabel, tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Hanivan Rizky Sobari";
// echo "Hallo nama saya $nama";

// operator MTK () * / + - %
// $x = 10;
// $y = 20;
// echo $x * $y;

// operator penggabung string (.)
// $nama_depan = "Hanivan Rizky";
// $nama_belakang = "Sobari";
// echo $nama_depan . " " . $nama_belakang;

// operator assignment: =, -=, +=, /=, *=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Hanivan";
// $nama .= " ";
// $nama .= "Rizky";
// $nama .= " ";
// $nama .= "Sobari";
// echo $nama;

// operator perbandingan: <, >, <=, >=, ==, != (biasa dipakai dipengkondisian, tidak mengecek type data)
// var_dump(1 == "1");

// identitas
// === dan !==
// var_dump(1 === "1");

// operator logika: &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);


// interpolasi = untuk mengecek didalam var/string terdapat variabel/tidak
?>

























<!-- penulisan syntaks php -->
<!-- 1. PHP didalam html -->
<!-- <!DOCTYPE html>
<html>
<head>
	<title>PHPdasar</title>
</head>
<body>
	<h1>Hallo, selamat datang <?php // echo $nama; ?></h1>
	<p><?php // echo "Ini adalah paragraft"; ?></p>
</body>
</html> -->

<!-- 2. HTML didalam php, tidak disarankan -->
<!-- <body>
	<?php 
		// echo "Hanivan";
	 ?>
</body> -->