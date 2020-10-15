<?php 
// pengulangan pada array
// for / foreach
$angka = [2,123,23,56,234,122,3555,45];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Latihan 2</title>
	</head>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
<body>
	
<?php for($i = 0; $i < count($angka); $i++) : ?>
	<div class="kotak"><?= $angka[$i] ?></div>
<?php endfor; ?>

<div class="clear"></div>

<?php foreach ($angka as $a) : ?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>