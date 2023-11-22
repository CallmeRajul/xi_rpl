<?php
require_once "../config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nis = $_POST["nis"];
    $judul = $_POST["judul"];
    $keterangan = $_POST["keterangan"];
    $tanggal = $_POST["tanggal"];
    $penulis = $_POST["penulis"];

    // Check if the file input is set and no error occurred during file upload
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {
        $gambar = base64_encode(file_get_contents($_FILES["gambar"]["tmp_name"]));
    } else {
        $gambar = '';
    }

    try {
        $query = "INSERT INTO news (nis, judul, keterangan, tanggal, penulis, gambar) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(1, $nis);
        $stmt->bindParam(2, $judul);
        $stmt->bindParam(3, $keterangan);
        $stmt->bindParam(4, $tanggal);
        $stmt->bindParam(5, $penulis);
        $stmt->bindParam(6, $gambar);

        if ($stmt->execute()) {
            header("Location: ../views/news");
            exit;
        } else {
            echo "Failed to execute query.";
        }
    } catch (PDOException $e) {
        echo "Kesalahan: " . $e->getMessage();
    }
} else {
    header("Location: ../index.php");
    exit;
}
?>
