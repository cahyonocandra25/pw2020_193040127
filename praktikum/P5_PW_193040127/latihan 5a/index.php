 <?php 
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
// memilih database
mysqli_select_db($conn, "pw_193040127") or die ("Database salah!");
// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM makanan");
?>

<html>
    <head>
        <title>Tugas2_193040127</title>
    </head>
    <style>
        body {
            background-color: darkblue;
        }
        table{
            background-color: darkgrey;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h5 a{
            text-decoration: none;
            color: white;
            font-size: 50px;
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: white;
        }
    </style>
    <body>
        <h3>Makanan</h3>
        <table border="1px">
            <tr>
                <th>foto</th>
                <th>nama makanan</th>
                <th>asal daerah</th>
                <th>bahan dasar</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php while ($i = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><img width="100px" src="ASSETS/img/<?= $i['foto']; ?>"></td>
                <td><?= $i["nama_makanan"]; ?></td>
                <td><?= $i["asal_daerah"]; ?></td>
                <td><?= $i["bahan_dasar"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
             <?php endwhile; ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>
