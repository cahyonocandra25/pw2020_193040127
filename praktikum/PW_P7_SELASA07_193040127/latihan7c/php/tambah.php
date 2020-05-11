<?php
require 'function.php';
session_start();

if(!isset($_SESSSION["username"])) {
	header("Location: login.php");
	exit;
}

if (isset($_POST["tambah"])) {
	if (tambah($_POST) > 0) {
		echo 	"<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h3 style="margin-left : 40px;">Formulir Tambah Data</h3>
	<form action="" method="post">
		<ul style="list-style-type : none;">
			<li>
				<label for="foto">foto :</label><br>
				<input type="text" name="foto" id="foto" required><br><br>
			</li>
			<li>
				<label for="nama_makanan">nama :</label><br>
				<input type="text" name="type" id="type" required><br><br>
			</li>
			<li>
				<label for="asal_daerah">asal daerah :</label><br>
				<input type="asal daerah" name="asal daerah" required><br><br>
			</li><br>
			<li>
				<label for="bahan_dasar">bahan dasar :</label><br>
				<input name="bahan dasar" id="bahan dasar" required><br><br>
			</li><br>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="harga" name="harga" id="harga" required><br><br>
			</li>
			<br>
			<button type="submit" name="tambah">Tambah Data!</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color : black;">Back</a>
			</button>
		</ul>
	</form>
</body>

</html>