<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN SYSTEM</title>
</head>

<body>
    <div class="container">
        <section class="wrapper">
            <h3 class="title">LOGIN SYSTEM</h3>

            <!-- Notifikasi -->
            <?php 
            if (isset($_GET['message'])) {
                $msg = $_GET['message'];
                echo "<div class='notif-login'>$msg</div>";
            }
            ?>
            <div>
                <form action="login.php" method="POST" class="form-login">
                    <label for="">Masukkan nomor induk</label>
                    <input type="number" placeholder="Nomor Induk Pegawai" name="nomor_induk" class="input-login"
                        required>
                    <label for="">Masukkan password</label>
                    <input type="password" placeholder="******" name="pass" class="input-login" required>
                    <button type="submit" class="button-login" name="login">Login</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>