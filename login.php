<?php 
include "./Users.php";
include "./koneksi.php";

$user = new Users();

if (isset($_POST['login'])) {
    $user -> set_login_data($_POST['nip'], $_POST['password']);

    $id = $user->get_nip_id();
    $pass = $user ->get_pass();

    $sql = "SELECT * FROM users WHERE nip = '$id' AND password = '$pass'";
    $result = $conn -> query($sql);
    
    if ($result -> num_rows > 0) {
        echo "Data Cocok";
    } else {
        echo "Data tidak cocok";
    }
}
?>