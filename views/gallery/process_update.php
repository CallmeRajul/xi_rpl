<?php
require_once "koneksi.php";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $idToUpdate = isset($_POST['id']) ? $_POST['id'] : null;
    $keteranganBaru = isset($_POST['keterangan']) ? $_POST['keterangan'] : null;

    if ($idToUpdate) {
        // Periksa apakah ada file gambar yang diunggah
        if (isset($_FILES['gambar']['tmp_name']) && $_FILES['gambar']['tmp_name'] !== "") {
            $gambarPath = $_FILES['gambar']['tmp_name'];
            $gambarType = $_FILES['gambar']['type'];

            $fotoFolder = "foto/";
            $gambarBlob = base64_encode(file_get_contents($gambarPath));

            // Update gambar jika diunggah
            $stmtGambar = $conn->prepare("UPDATE gallery SET gambar = :gambar WHERE id = :id");
            $stmtGambar->bindParam(':gambar', $gambarBlob, PDO::PARAM_LOB);
            $stmtGambar->bindParam(':id', $idToUpdate);
            $stmtGambar->execute();
        }

        // Update keterangan
        $stmtKeterangan = $conn->prepare("UPDATE gallery SET keterangan = :keterangan WHERE id = :id");
        $stmtKeterangan->bindParam(':keterangan', $keteranganBaru);
        $stmtKeterangan->bindParam(':id', $idToUpdate);
        $stmtKeterangan->execute();

        echo "Data berhasil diupdate.";
    } else {
        echo "ID tidak valid.";
    }
} catch (PDOException $e) {
    echo "Gagal mengupdate data: " . $e->getMessage();
} catch (Throwable $e) {
    echo "Fatal error: " . $e->getMessage();
}

// Tutup koneksi
$conn = null;
?>
