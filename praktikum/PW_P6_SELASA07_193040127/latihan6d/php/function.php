<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040127") or die ("Database salah!");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
     $conn = koneksi();
     
     $foto = htmlspecialchars($data["foto"]);
     $nama_makanan = htmlspecialchars($data["nama_makanan"]);
     $asal_daerah = htmlspecialchars($data["asal_daerah"]);
     $bahan_dasar = htmlspecialchars($data["bahan_dasar"]);
     $harga = htmlspecialchars($data["harga"]);

     $query = "INSERT INTO makanan
                    VALUES
                    ('','$foto','$nama_makanan','$asal_daerah','$bahan_dasar',' $harga')";
            
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
 }

 function hapus($id)
{
 $conn = koneksi();
 mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

 return mysqli_affected_rows($conn);

}

function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $foto = htmlspecialchars($data["foto"]);
    $nama_makanan = htmlspecialchars($data["nama_makanan"]);
    $asal_daerah = htmlspecialchars($data["asal_daerah"]);
    $bahan_dasar = htmlspecialchars($data["bahan_dasar"]);
    $harga = htmlspecialchars($data["harga"]);

    $queryubah = "UPDATE makanan
                SET
                photo = '$foto',
                jenis = '$nama_makanan',
                merek = '$asal_daerah',
                tipe = '$bahan_dasar',
                harga = '$harga'
                WHERE id = '$id' ";

    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}