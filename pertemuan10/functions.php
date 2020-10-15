<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari table mahasiswa / query data mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if (!$result){
// 	echo mysqli_error($conn);
// }

// ambil data (fetch) mahasiswa dari object result, ada 4 cara
// mysqli_fetch_row(): mengembalikan array numeric
// mysqli_fetch_assoc(): mengembalikan array associative
// mysqli_fetch_array(): mengembalikan array num dan assoc
// mysqli_fetch_object() 

// while($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
// } 

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$name = htmlspecialchars($data["name"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO mahasiswa
				VALUES
				('', '$name', '$nrp', '$email', '$jurusan', '$gambar')
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

?>