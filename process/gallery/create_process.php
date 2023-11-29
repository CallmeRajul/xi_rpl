<?php

require_once "../../config/config.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : null;

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
    } else {    
        $image = '';
    }

    $stmt = $conn->prepare("INSERT INTO gallery (id, keterangan, gambar) VALUES (:id, :keterangan, :gambar)");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':keterangan', $keterangan);
    $stmt->bindParam(':gambar', $image);

    $stmt->execute();

    echo "Data berhasil ditambahkan.";
} catch (PDOException $e) {
    echo "Gagal menambahkan data: " . $e->getMessage();
} catch (Throwable $e) {
    echo "Fatal error: " . $e->getMessage();
} finally {
    // Close the database connection
    $conn = null;
}
?>
