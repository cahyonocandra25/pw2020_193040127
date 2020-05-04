<?php 
// menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
$result = query("SELECT * FROM makanan")
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>makanan</h3>
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>Opsi</th>
                <th>foto</th>
                <th>nama_makanan</th>
                <th>asal_daerah</th>
                <th>bahan_dasar</th>
                <th>harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($result as $i) : ?>
             <tr>
                <td>
                    <a href=""><button class="b1">Ubah</button></a>
                    <a href=""><button class="b2">Hapus</button></a>
                </td>
                <td><img width="100px" src="../assets/img/<?= $i['foto']; ?>"></td>
                <td><?= $i["nama_makanan"]; ?></td>
                <td><?= $i["asal_daerah"]; ?></td>
                <td><?= $i["bahan_dasar"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>	
    </body>
</html>