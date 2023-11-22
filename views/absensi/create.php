<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $sql = "INSERT INTO absensi_rpl (nis, nama, tanggal, status) VALUES ('$nis', '$nama', '$tanggal', '$status')";
    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "gagal";
    }
}
?>

<form method="POST" action="">
    Nis: <input type="text" name="nis"><br>
    Nama: <input type="text" name="nama"><br>
    Tanggal: <input type="date" name="tanggal"><br>
    Status: <input type="radio" name="status" value='H'>Hadir<input type="radio" name="status" value='S'>Sakit
    <input type="radio" name="status" value='I'>Izin<input type="radio" name="status" value='A'>Alfa<br>
    <input type="submit" value="Tambah">
</form>
