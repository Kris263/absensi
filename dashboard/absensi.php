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

$tgl = date('Y-m-d');
$jam = date('H:i:s');
$nip = $_SESSION['nip'];

date_default_timezone_set("Asia/Makassar");

$sql = "SELECT * FROM absen WHERE nip = '$nip'";
$result = $conn -> query($sql);

while($row = $result -> fetch_assoc()) {

    echo "<tr>";
    echo "<td>".$row ['tgl']."</td>"; 
    echo "<td>".$row ['jam_masuk']."</td>";

    if (empty($row['jam_keluar']) && !empty($row['jam_masuk']) && $tgl ==  $row['tgl']) {
        echo "<td><button>Keluar</button></td>";
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


