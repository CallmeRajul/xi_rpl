<?php
require_once "../config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah NIS berita yang akan diperbarui sudah diberikan
    if (isset($_POST['nis'])) {
        $nis = $_POST['nis'];
        $judul = $_POST['judul'];
        $keterangan = $_POST['keterangan'];
        $tanggal = $_POST['tanggal'];
        $penulis = $_POST['penulis'];

        // Memeriksa apakah ada gambar yang diunggah
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
            $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
        } else {
            // Jika tidak ada gambar diunggah, tetap gunakan gambar yang ada di database
            $query = "SELECT gambar FROM news WHERE nis = :nis";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':nis', $nis);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $gambar = $row['gambar'];
        }

        // Query untuk memperbarui berita di database
        $query = "UPDATE news SET judul = :judul, keterangan = :keterangan, tanggal = :tanggal, penulis = :penulis, gambar = :gambar WHERE nis = :nis";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nis', $nis);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':keterangan', $keterangan);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':penulis', $penulis);
        $stmt->bindParam(':gambar', $gambar, PDO::PARAM_LOB);

        if ($stmt->execute()) {
            // Data berhasil disimpan
            header("Location: ../views/news");
            exit;
        } else {
            // Terjadi kesalahan saat menyimpan data
            header("Location: ../views/news");
            exit;
        }
    } else {
        // NIS berita yang akan diperbarui belum diberikan
        header("Location: ../views/news");
        exit;
    }
} else {
    // Request bukan POST, redirect atau lakukan tindakan lain sesuai kebutuhan
    header("Location: ../views/news");
    exit;
}
