 <?php 
// menghubungkan dengan file php lainnya
require 'php/fungtion.php';
// melakukan query
$result = query("SELECT * FROM makanan")
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
            <?php foreach ($result as $i) { ?>
             <tr>
                <td><img width="100px" src="assets/img/<?= $i['foto']; ?>"></td>
                <td><?= $i["nama_makanan"]; ?></td>
                <td><?= $i["asal_daerah"]; ?></td>
                <td><?= $i["bahan_dasar"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>
