<?php
	require 'function.php';

	$id = $_GET['id'];
$i = query("SELECT * FROM makanan WHERE id = $id")[0];

	if (isset($_POST["ubah"])) 
	{
		if (tambah($_POST) > 0) {
			echo 	"<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
		}
		else {
			echo "<script>
				alert('data gagal diubah!');
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
	<h3 style="margin-left : 40px;">Formulir ubah Data</h3>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $i["id"]; ?>">
		<ul style="list-style-type : none;">
			<li>
				<label for="foto">foto :</label><br>
				<input type="text" name="foto" id ="foto" value="<?= $i["foto"]; ?>" required><br><br>
			</li>
			<li>
				<label for="nama_makanan">nama makanan :</label><br>
				<input type="text" name="nama_makanan" id ="nama_makanan" value="<?= $i["nama_makanan"]; ?>"required><br><br>
			</li>
			<li>
				<label for="asal_daerah">asal daerah :</label><br>
				<input type="text" name="asal_daerah" id ="asal_daerah" value="<?= $i["asal_daerah"]; ?>"required><br><br>	
			</li><br>
			<li>
				<label for="bahan_dasar">bahan dasar :</label><br>
				<input type="text" name="bahan_dasar" id ="bahan_dasar" value="<?= $i["bahan_dasar"]; ?>"required><br><br>	
			</li><br>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="harga" name="harga" id ="harga" value="<?= $i["harga"]; ?>"required><br><br>
			</li>
			<br>
			<button type="submit" name="submit">ubah data!</button>
			<button type="submit">
				<a href="../index.php" style="text decoration: none; color : black;">Back</a>
			</button>
		</ul>
	</form>
</body>
</html>
