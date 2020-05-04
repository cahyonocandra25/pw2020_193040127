<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query

// tombol cari di click
if(isset($_GET['cari'])){
    $keyword = $_GET ["keyword"];
    $makanan = query("SELECT * FROM makanan WHERE
                tipe LIKE '%$keyword%' 
                ");
} else {
    $makanan = query("SELECT * FROM makanan");
}
?>
<html>
    <head>
        <title>makanan</title>
    </head>
    <body>
    <a href="php\admin.php"><button>Go to Admin!</button></a><br><br>
            <form action="" method="get">
                <input type="text" name="keyword" autofocus placeholder="Masukkan Keyword" autocomplete="off">
                <button type="submit" name="cari">Cari!</button>
            </form>   
            <?php if (empty($makanan)) : ?>
                <tr>
                    <td>
                        <h1>Data tidak ada,masukkan keyword dengan benar.</h1>
                    </td>
                </tr>
            <?php else : ?>    
        <div class="container">
        <?php foreach ($makanan as $i) :?>
            <p class="nama">
                 <a href="php/detail.php?id=<?= $i['id'] ?>">
                    <?= $i["tipe"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </body>
</html>
