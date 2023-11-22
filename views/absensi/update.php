<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $sql = "UPDATE absensi_rpl SET nama='$nama', tanggal='$tanggal', status='$status' WHERE nis=$nis";
    if ($koneksi->query($sql) === TRUE) {
        echo "Produk berhasil diubah";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<form method="POST" action="">
    NIS: <input type="text" name="nis"><br>
    Nama: <input type="text" name="nama"><br>
    Tanggal: <input type="date" name="tanggal"><br>
    Status: <input type="radio" name="status" value='H'>Hadir<input type="radio" name="status" value='S'>Sakit
    <input type="radio" name="status" value='I'>Izin<input type="radio" name="status" value='A'>Alfa<br>
    <input type="submit" value="Ubah">
</form>
