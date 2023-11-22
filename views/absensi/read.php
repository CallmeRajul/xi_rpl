<?php
include 'koneksi.php';

$sql = "SELECT * FROM absensi_rpl";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nis: " . $row["nis"] . "<br>";
        echo "Nama: " . $row["nama"] . "<br>";
        echo "Tanggal: " . $row["tanggal"] . "<br>";
        echo "Status: " . $row["status"] . "<br><hr>";
    }
} else {
    echo "Tidak ada produk yang ditemukan.";
}
?>
