<?php
$targetfolder = "foto/";
$namapoto = isset($_FILES["gambar"]["name"]) ? $_FILES["gambar"]["name"] : null;
if ($namapoto) {
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetfolder . $namapoto);
}

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'db_rpl';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, keterangan, gambar FROM gallery";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo '<div class="row">';

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-3">';
            echo '<div class="card">';
            
            $image = base64_decode($row['gambar']);
            echo('<img src="data:image/jpeg;base64,'.base64_encode($image).'"');

            echo '<div class="card-body">';
            echo "<h5 class='card-title'>ID: {$row['id']}</h5>";
            echo "<p class='card-text'>Keterangan: {$row['keterangan']}</p>";
            
            echo "</p>";

            echo '</div>';

            echo '<div class="card-footer text-center">';
            echo "<a href='update.php?id={$row['id']}' class='btn btn-primary'>Edit</a> ";
            echo "<a href='delete.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Apakah kamu yakin ingin menghapus data ini?\")'>Hapus</a>";
            echo '</div>';

            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo "Tidak ada data.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
