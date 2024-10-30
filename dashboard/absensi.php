<table border="1">
    <tr>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Keluar</th>
        <th>Performa</th>
    </tr>

    <?php
include "../koneksi.php"; 
// session_start();
date_default_timezone_set("Asia/Makassar");

$tgl = date('Y-m-d');
$jam = date('H:i:s');
$nip = $_SESSION['nip'];

$sql = "SELECT * FROM absen WHERE nip = '$nip'";
$result = $conn -> query($sql);

while($row = $result -> fetch_assoc()) {

    echo "<tr>";
    echo "<td>".$row ['tgl']."</td>"; 
    echo "<td>".$row ['jam_masuk']."</td>";

    if (empty($row['jam_keluar']) && !empty($row['jam_masuk']) && $tgl ==  $row['tgl']) {
        echo "<td>
        <form action='' method='POST' onsubmit='return alert(`Terima kasih sudah berjuang hari ini`)'>    
            <button type='submit' name='btn-keluar'>Keluar</button>
        </form>
        </td>";
    } else {
        echo "<td>".$row ['jam_keluar']."</td>";
    }
    echo "<td>🤣</td>";
    echo "</tr>";

}
?>
</table>
<form action="action.php" method="POST">
    <button type="submit" name="btn-absen">Absen sekarang</button>
</form>

<?php 
if (isset($_POST['btn-keluar'])) {
    $update = "UPDATE absen SET jam_keluar = '$jam' WHERE nip = '$nip'
    AND tgl = '$tgl'";

    $jam_keluar = $conn -> query($update);
    if ($jam_keluar == TRUE) {
        session_start();
        session_destroy();
        header("location:../index.php");
    }
}
?>