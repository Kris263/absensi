<?php 
    include "../koneksi.php";
    session_start();    

    if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
        header("location:../index.php?message=Silahkan login terlebih dahulu");
    }

    if(isset($_POST['btn-logout'])) {
        session_destroy();
        header("location: ../index.php?message=Keluar dari sistem");
    }

        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>

<body>
    <section>
        <h3>Halo <?php echo $_SESSION['nama_lengkap'];?></h3>
        <p>Status Pegawai: <?php echo $_SESSION['role'];?></p>
        <br>
        <?php
        if (isset($_GET['message']))
            echo $_GET['message'];
        ?>
        <!-- Tampil Data Absen Start -->
        <table border="1">
            <tr>
                <th>NIP</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
            </tr>

            <?php
            $data_nama = "SELECT nama_lengkap FROM users";
            $data_absen = "SELECT * FROM absen";
            $result_nama = $conn -> query($data_nama);
            $result_absen = $conn -> query($data_absen);

            while ($row = $result_absen -> fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['nip']."</td>";
                echo "<td>".$row['jam_masuk']."</td>";
                echo "<td>".$row['jam_keluar']."</td>";
                echo "</tr>";
            }

            ?>
        </table>
        <!-- Tampil Data Absen End -->

        <!-- Tambah Data Pegawai START -->

        <a href="tambah-pegawai.php">
            <button name="btn-tambah">Tambah Pegawai</button>
        </a>

        <!-- Tambah Data Pegawai END -->
        <br>
        <form action="" method="POST">
            <button name="btn-logout">LOGOUT</button>
        </form>
    </section>
</body>

</html>