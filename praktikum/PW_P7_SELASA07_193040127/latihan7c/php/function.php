<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040127") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $makanan = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($makanan)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $photo = htmlspecialchars($data["foto"]);
    $jenis = htmlspecialchars($data["nama_makanan"]);
    $merk = htmlspecialchars($data["asal_daerah"]);
    $type = htmlspecialchars($data["bahan_dasar"]);
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
    $photo = htmlspecialchars($data["foto"]);
    $jenis = htmlspecialchars($data["nama_makanan"]);
    $merek = htmlspecialchars($data["asal_daerah"]);
    $type = htmlspecialchars($data["bahan_dasar"]);
    $harga = htmlspecialchars($data["harga"]);

    $queryubah = "UPDATE makanan
                SET
                foto = '$foto',
                nama = '$nama_makanan',
                asal daerah = '$asal_daerah',
                bahan dasar = '$bahan_dasar',
                harga = '$harga'
                WHERE id = '$id' ";

    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);

    // cek username sudah ada belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUE('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);



}
