<?php 
session_start();
include "./Users.php";
include "./koneksi.php";

$user = new Users();

if (isset($_POST['login'])) {
    if (strlen($_POST['nomor_induk']) <= 2 || strlen($_POST['pass']) <= 2) {
        header("location: ./index.php?message=NIP atau password tidak cocok");
    } else {
        $user -> set_login_data($_POST['nomor_induk'], $_POST['pass']);

        $id = $user->get_nip_id();
        $pass = $user ->get_pass();

        $sql = "SELECT * FROM users WHERE nip = $id AND password = '$pass'";
        $result = $conn -> query($sql);
    
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $_SESSION['status'] = "login";
                $_SESSION["nip"] = $row['nip'];
                $_SESSION["nama_lengkap"] = $row['nama_lengkap'];
                $_SESSION["role"] = $row['role'];
            }
            header("location: ./dashboard/index.php");
        } else {
            header("location: ./index.php?message=NIP atau Password SALAH");
        }
    }   
}
?>