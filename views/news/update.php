<?php


include_once "../../config/config.php";

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];

    $query = "SELECT * FROM news WHERE nis = :nis";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nis', $nis);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <h2>Edit Berita</h2>
        <form action="../../process/update_news_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="nis" value="<?php echo $row['nis']; ?>">
            <label for="judul">Judul</label>
            <input type="text" name="judul" value="<?php echo $row['judul']; ?>">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan"><?php echo $row['keterangan']; ?></textarea>
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" value="<?php echo $row['penulis']; ?>">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar">
            <input type="submit" value="Simpan Perubahan">
        </form>
        <?php
    } else {
        echo 'Berita tidak ditemukan.';
    }
} else {
    echo 'NIS berita yang akan diedit belum diberikan.';
}
?>