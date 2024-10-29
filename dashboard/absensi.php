<?php
include "../koneksi.php"; 
// session_start();
date_default_timezone_set("Asia/Makassar");

$tgl = date('d-m-Y');
$jam = date('H:i:s');
$nip = $_SESSION['nip'];

if (isset($_POST['btn-absen'])) {
    $sql = "INSERT INTO  `absen` (`id`,`nip`,`tgl`,`jam_masuk`,`jam_keluar`) 
        VALUES (NULL,'$nip','$tgl','$jam',NULL)";

    $result = $conn -> query($sql);
    if ($result === TRUE) {
        echo "ANDA BERHASIL ABSEN";
    } else {
        echo "ANDA GAGAL ABSEN";
    }
}
?>