<?php
include "../koneksi.php";
session_start();

date_default_timezone_set("Asia/Makassar");

$nip = $_SESSION['nip'];
$tgl = date('Y-m-d');
$jam = date('H:i:s');


if (isset($_POST['btn-absen'])) {

    $cek_absensi = "SELECT tgl FROM absen WHERE nip = '$nip' AND tgl = '$tgl'";
    $cek = $conn -> query($cek_absensi);
    
    if ($cek -> num_rows > 0) {
        header("location:index.php?message=MAAF ANDA SUDAH ABSEN HARI INI");
    } else {
        $sql = "INSERT INTO  `absen` (`id`,`nip`,`tgl`,`jam_masuk`,`jam_keluar`) 
        VALUES (NULL,'$nip','$tgl','$jam',NULL)";
        $result = $conn -> query($sql);
        if ($result === TRUE) {
            header("location:index.php?message=ABSEN BERHASIL DILAKUKAN");
        } else {
            header("location:index.php?message=ABSEN GAGAL DILAKUKAN");
        }
    }

}
?>
