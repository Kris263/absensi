<?php 
include "../koneksi.php";
session_start();


if (isset($_POST['tambah'])) {
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $peran = htmlspecialchars($_POST['peran']);
    $password = htmlspecialchars($_POST['kata_kunci']);
    
    $sql_tambah = "INSERT INTO `users` (`nip`, `nama_lengkap`, `role`, `password`) 
    VALUES ('$nip', '$nama', '$peran', '$password')";
    $simpan = $conn -> query($sql_tambah);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data pegawai</title>
</head>

<body>
    <form action="" method="POST">
        <label for="nip">NIP</label>
        <input type="number" name="nip" required>
        <br>
        <label for="nama">Nama lengkap</label>
        <input type="text" value="" name="nama" required>
        <br>
        <label for="peran">Role</label>
        <input type="text" name="peran" required>
        <br>
        <label for="kata_kunci">Password</label>
        <input type="text" name="kata_kunci" required>
        <br>
        <button name="tambah">Tambah</button>
    </form>
</body>

</html>