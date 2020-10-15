<?php
require 'functions.php';

if(isset($_POST["login"])){
	// tangkap data user-pass dari post
	$username = $_POST["username"];
	$password = $_POST["password"];

	// cek jika username tersedia
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if(mysqli_num_rows($result) === 1){
		// cek passwordnya
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){//string yang belum diacak, string yang sudah diacak
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Halaman Login</title>
		<style>
			body {
				text-align: center;
			}
			label {
				display: block;
			}
		</style>
	</head>
<body>
	
<h1>Login</h1>
<?php if(isset($error)) : ?>
	<p style="color: red; font-style: italic;">username atau password salah!</p>
<?php endif; ?>

<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username: </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password: </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
</form>

</body>
</html>