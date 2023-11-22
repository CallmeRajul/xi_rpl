<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];

    $sql = "DELETE FROM absensi_rpl WHERE nis=$nis";
    if ($koneksi->query($sql) === TRUE) {
        echo "Produk berhasil dihapus";
    } else {
        echo "Error: ";
}
}
?>

<form method="POST" action="">
    NIS: <input type="text" name="nis"><br>
    <input type="submit" value="Hapus Produk">
</form>
