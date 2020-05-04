<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM makanan")
?>
<html>
    <head>
        <title>Elektronik</title>
    </head>
    <body>
        <div class="container">
        <?php foreach ($result as $i) :?>
            <p class="nama">
                 <a href="php/detail.php?id=<?= $i['id'] ?>">
                    <?= $i["nama_makanan"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        </div>
    </body>
</html>
