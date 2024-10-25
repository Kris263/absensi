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
            <div>
                <form action="login.php" method="POST" class="form-login">
                    <label for="">Masukkan nomor induk</label>
                    <input type="number" placeholder="Nomor Induk Pegawai" name="nip" class="input-login">
                    <label for="">Masukkan password</label>
                    <input type="password" placeholder="******" name="password" class="input-login">
                    <button type="submit" class="button-login" name="login">Login</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>