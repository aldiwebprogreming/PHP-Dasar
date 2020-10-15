<?php 
// array: variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data berbeda
// pasangan antara key dan value
// key-nya index yang dimulai dari 0


// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br><br>";
print_r($bulan);
echo "<br><br>";

// menampilkan 1 element pada array
echo $arr1[0];
echo "<br><br>";
echo $bulan[1];
echo "<br><br>";

// menambahkan element baru pada array
$hari[] = "Kamis";
var_dump($hari);
echo "<br><br>";

?>