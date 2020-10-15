<?php 
// build in function
	// untuk menampilkan tanggal dengan format tertentu
		// echo date("l, d-M-Y ");
	// time
	// UNIX Timestamp / EPOCH time
	// detik yang sudah berlalu sejak 1 Januari 1970 
		// echo time();

	// Menggabungkan dua function diatas
		// echo date("l", time()-60*60*24*100);

	//mktime: membuat detik sendiri
	// mktime(0,0,0,0,0,0);
	// jam, menit, detik, bulan, tanggal, tahun
		// mencari tanggal lahir
		// echo date("l", mktime(0,0,0,12,17,2003));
	// strtotime: mengubah format tanggal jadi detik
	// echo date("l", strtotime("17 dec 2003"));

	// string
	// strlen(); // untuk menghitung panjang dari string
	// strcmp(str1, str2); // untuk membandingkan 2 buah string
	// explode(delimiter, string); // untuk memecah string menjadi array
	// htmlspecialchars(string); // untuk mengamani source html

	// utility
	// var_dump(expression); // mencetak panjang dari isi variabel
	// isset(var); // untuk mengecek sebuah variabel sudah pernah dibuat / belum (boolean)
	// empty(var); // mengecek suatu varibel kosong / tidak
	// die(); // untuk memberhentikan program
	// sleep(seconds); // untuk memberhentikan sementara

// user-defined function: fungsinya harus didefinisikan dulu, lalu panggil
	function salam($waktu = "Datang", $nama = "Admin!") {
		return "Selamat $waktu, $nama!";
	}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Membuat Fungsi</title>
 </head>
<body>
		
 <h1><?= salam("Pagi", "Hanivan"); ?></h1>

</body>
</html>