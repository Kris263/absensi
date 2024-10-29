<?php 
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
        <div>
            <table border="1">
                <tr>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Performa</th>
                </tr>
                <!-- INI DATA ABSEN -->
                <?php include "absensi.php";?>
                <!-- STOP IN HERE -->
            </table>
        </div>
        <br>
        <form action="" method="POST">
            <button type="submit" name="btn-absen">Absen sekarang</button>
        </form>
        <br>
        <form action="" method="POST">
            <button name="btn-logout">LOGOUT</button>
        </form>
    </section>
</body>

</html>