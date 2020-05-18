<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'function.php';

    $id = $_GET['id'];

    $i = query("SELECT * FROM makanan WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>document</title>



        <link rel="stylesheet" href="../css/detail.css">

    </head>

<body>
<div class="container">
        <div class="photo">
            <img src="../assets/img/<?= $i["foto"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $i["nama_makanan"]; ?></p>
                <p><?= $i["asal_daerah"]; ?></p>
                <p><?= $i["bahan_dasar"]; ?></p>
                <p><?= $i["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">Back</a> </button>
    </div>
</body>
</html>
