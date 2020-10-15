<?php
require 'functions.php';
session_start();

// cek cookie
if(isset($_COOKIE['act']) && isset($_COOKIE['key'])){
	$id = $_COOKIE['act'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek apakah sama?
	if($key === hash('sha256', $row['username'])){
		$_SESSION['login'] = true;
	}

}

if(isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}

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
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if(isset($_POST['remember'])){
				// buat cookie,, bukan cara terbaik. Harusnya ngambil value dari database
				setcookie('act', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			} 

			// redirect index.php
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
			.tengah {
				width: 100%;
				height: 100%;
			}
		</style>
	</head>
<body>
	
<h1>Login</h1>
<?php if(isset($error)) : ?>
	<p style="color: red; font-style: italic;">username atau password salah!</p>
<?php endif; ?>

<form action="" method="post">
	<div class="tengah">
		<table>
			<tbody>
				<tr>
					<td><label for="username">Username: </label></td>
					<td><input type="text" name="username" id="username" autofocus placeholder="Masukkan username" autocomplete="off"></td>
				<tr>
					<td><label for="password">Password: </label></td>
					<td><input type="password" name="password" id="password" placeholder="Masukkan kata sandi" autocomplete="off"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="checkbox" name="remember" id="remember"><label for="remember">Remember Me</label></td>
				</tr>
				<tr>
					<td><button type="submit" name="login">Login</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>

</body>
</html>