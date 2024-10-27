<?php 
    session_start();
    echo $_SESSION['status'];
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
    </section>
</body>

</html>