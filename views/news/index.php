


<?php
session_start();

if (!isset($_SESSION['nis'])) {
    header("Location: ../login");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/css/global.css">
    <link rel="stylesheet" href="../../dist/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">
    <title>Dashboard</title>
</head>

<body>
    <?php

    include "../komponen/sidebar.php";

    ?>
    <div id="main-content">
    <div class="card">
    <img src="gambar_berita.jpg" alt="Gambar Berita" class="card-image">
    <div class="card-content">
      <h2 class="card-title">Viral Bendahara Kelas Dibunuh Teman Gara-gara Tagih Iuran Kas, Jasad Korban Dimasukkan Karung</h2>
      <p class="card-summary">Viral seorang bendahara kelas berinisial AE (15) tahun menjadi korban pembunhan oleh teman sekelasnya sendiri.

Pelaku pembunuhan ini adalah AB (15).

Dalam menjalankan aksinya AB tak sendiri, ia dibantu MA (190) yang kini juga sudah ditahan polisi.</p>
      <p class="card-details">
        Detail berita yang menarik bisa ditambahkan di sini.
      </p>
      <p class="card-source">Sumber: Denaa.com</p>
    </div>
  </div>
    <?php

include_once "../../config/config.php";


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


    </div>
    <script src="../../dist/js/global.js"></script>
</body>







