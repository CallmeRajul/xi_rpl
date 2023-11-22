<?php

require_once "koneksi.php";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : null;

if (isset($_FILES['gambar']['tmp_name']) && $_FILES['gambar']['tmp_name'] !== "") {
    $gambarPath = $_FILES['gambar']['tmp_name'];
    $gambarType = $_FILES['gambar']['type'];
    
    $fotoFolder = "foto/";
    $gambarPathDest = $fotoFolder . basename($_FILES['gambar']['name']);
    
    move_uploaded_file($gambarPath, $gambarPathDest);

    $gambarBlob = base64_encode(file_get_contents($gambarPathDest));
} else {
    $gambarBlob = null;
}

    $stmt = $conn->prepare("INSERT INTO gallery (id, keterangan, gambar) VALUES (:id, :keterangan, :gambar)");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':keterangan', $keterangan);

    if ($gambarBlob !== null) {
        $stmt->bindParam(':gambar', $gambarBlob, PDO::PARAM_LOB);
    } else {
        $stmt->bindValue(':gambar', null, PDO::PARAM_NULL);
    }

    $stmt->execute();

    echo "Data berhasil ditambahkan.";
} catch (PDOException $e) {
    echo "Gagal menambahkan data: " . $e->getMessage();
} catch (Throwable $e) {
    echo "Fatal error: " . $e->getMessage();
}

// Tutup koneksi
$conn = null;
?>
