<?php 
// menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
if(isset($_GET['cari'])){
        $keyword = $_GET ["keyword"];
        $elektronik = query("SELECT * FROM elektronik WHERE
                    foto LIKE '%$keyword%' OR
                    nama_makanan  LIKE '%$keyword%' OR
                    asal_daerah LIKE '%$keyword%' OR
                    bahan_dasar LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'

                    ");
    } else {
        $makanan = query("SELECT * FROM makanan");
    }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1 class="head">makanan</h1>
        <div class="kotak">
        <div class="">
            <a href="tambah.php"><button class="add">Tambah Data</button></a>
        </div>
         <form action="" method="get">
                <input type="text" name="keyword"  size="40" autofocus placeholder="Masukkan Keyword" autocomplete="off">
                <button type="submit" name="cari">Cari!</button>
            </form>
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>Opsi</th>
                <th>foto</th>
                <th>nama_makanan</th>
                <th>asal_daerah</th>
                <th>bahan_dasar</th>
                <th>harga</th>
            </tr>
            <?php if (empty($makanan)) : ?>
                <tr>
                    <td colspan="6">
                        <h1>Data tidak ada!</h1>
                    </td>
                </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($makanan as $i) : ?>
             <tr>
                 <div class="">
                        <a href="hapus.php?id=<?= $i["id"] ?>" onclick="return confirm('Hapus Data??')"><button class="delete">Hapus</button></a>
                        <a href="ubah.php?id=<?= $i["id"] ?>"><button class="change">Ubah</button></a>
                 </div>
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