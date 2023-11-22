<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h2>Update Data</h2>

    <?php
    if (isset($_GET['id'])) {
        $idToUpdate = $_GET['id'];
        // Fetch data for the selected ID
        // Use the fetched data to pre-fill the form fields
    ?>
    
    <form action="process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $idToUpdate; ?>">

        <label for="gambar">Pilih Gambar Baru:</label>
        <input type="file" name="gambar" id="gambar" accept="image/*"><br>

        <label for="keterangan">Keterangan Baru:</label>
        <input type="text" name="keterangan" id="keterangan" required><br>

        <input type="submit" value="Update Data">
    </form>

    <?php
    } else {
        echo "ID tidak valid.";
    }
    ?>
</body>
</html>
