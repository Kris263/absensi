<?php 
include "./Users.php";
include "./koneksi.php";


$user = new Users();
if (isset($_POST['login'])) {
    $user -> set_login_data($_POST['nip'], $_POST['password']);
    
    $id = $user -> get_nip_id();
    $password = $user -> get_password();
    
    $sql = "SELECT * FROM users WHERE nip = $id AND password = $password";
    $result = $conn -> query($sql);
    
    if ($result -> num_rows > 0) {
        echo "cocok";
    } else {
        echo "tidak cocok";
    }
}
?>