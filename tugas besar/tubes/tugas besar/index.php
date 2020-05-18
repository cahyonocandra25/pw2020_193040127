<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query

// tombol cari di click
if (isset($_GET['cari'])) {
    $keyword = $_GET["keyword"];
    $elektronik = query("SELECT * FROM makanan WHERE
                tipe LIKE '%$keyword%' 
                ");
} else {
    $makanan = query("SELECT * FROM makanan");
}
?>
<head>
    <title>makanan daerah</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <a class="admin" href="php\login.php"><button type="">Go to Admin!</button></a><br><br>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus placeholder="Masukkan Keyword" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
        <link rel="stylesheet" href="css/index.css">
    </form>
    <?php if (empty($makanan)) : ?>
        <tr>
            <td>
                <h1>Data tidak ada,masukkan keyword dengan benar.</h1>
            </td>
        </tr>
    <?php else : ?>
        <div class="box-wrap">
            <?php foreach ($makanan as $i) : ?>
                <p class="box">
                    <a href="php/detail.php?id=<?= $i['id'] ?>">
                        <?= $i["nama_makanan"] ?>
                    </a><br>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
</body>

</html>