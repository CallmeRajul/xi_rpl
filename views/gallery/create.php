<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Form Tambah Data</h2>
    <form action="../../process/gallery/create_process.php" method="post" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>

        <label for="keterangan">Keterangan:</label>
        <input type="text" name="keterangan" required><br>

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required><br>

        <input type="submit" value="Tambah Data">
    </form>
</body>
</html>
