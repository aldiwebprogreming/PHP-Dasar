<?php 
require 'functions.php';
$produk = query("SELECT * FROM mahasiswa");

if(hapus($id) > 0){
	echo "
		<script>
			alert ('Data berhasil dihapus :D');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert ('Data gagal dihapus :(');
			document.location.href = 'index.php';
		</script>
	";
}
?>