<?php

include_once "../../config/config.php";

session_start();

if (!isset($_SESSION['nis'])) {
    header("Location: ../login");
    exit();
}

echo $_SESSION['username'];

$query = "SELECT * FROM news";
$stmt = $conn->query($query);

if ($stmt->rowCount() > 0) {
    echo '<h2>Data Berita</h2>';
    echo '<table border="1">';
    echo '<tr><th>NIS</th><th>Judul</th><th>Keterangan</th><th>Tanggal</th><th>Penulis</th><th>Edit</th></tr>';


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['nis'] . '</td>';
        echo '<td>' . $row['judul'] . '</td>';
        echo '<td>' . $row['keterangan'] . '</td>';
        echo '<td>' . $row['tanggal'] . '</td>';
        echo '<td>' . $row['penulis'] . '</td>';
        
        if (!empty($row['gambar'])) {
            $imageData = base64_decode($row['gambar']);
            echo '<td><img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="News Image" style="max-width: 100px; max-height: 100px;"></td>';
        } else {
            echo '<td>No Image</td>';
        }
    
        echo '<td><a href="update.php?nis=' . $row['nis'] . '">Edit</a></td>';
        echo '<td><a href="../../process/delete_news_process.php?nis=' . $row['nis'] . '">Delete</a></td>';
        echo '</tr>';
    }


    echo '</table>';
} else {
    echo 'Tidak ada data berita.';
}
?>