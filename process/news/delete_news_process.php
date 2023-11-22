<?php
require_once "../config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Memeriksa apakah NIS berita yang akan dihapus sudah diberikan
    if (isset($_GET['nis'])) {
        $nis = $_GET['nis'];

        // Query untuk menghapus berita dari database
        $query = "DELETE FROM news WHERE nis = :nis";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nis', $nis);

        if ($stmt->execute()) {
            // Data berhasil dihapus
            header("Location: ../views/news");
            exit;
        } else {
            // Terjadi kesalahan saat menghapus data
            header("Location: ../views/news");
            exit;
        }
    } else {
        // NIS berita yang akan dihapus belum diberikan
        header("Location: ../views/news");
        exit;
    }
} else {
    // Request bukan GET, redirect atau lakukan tindakan lain sesuai kebutuhan
    header("Location: ../views/news");
    exit;
}
