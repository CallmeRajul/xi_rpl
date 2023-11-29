


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
    <link rel="shortcut icon" href="../../dist/img/favicon.svg" type="image/x-icon">
    <title>News</title>
    <style>
        /* Reset default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
c 

.card {
  width: 600px; 
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
  margin-bottom: 20px;
}


.card-image {
  width: 300px;
  height: auto;
  display: block;
}


.card-content {
  width: 600px; 
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
  margin-bottom: 20px;
  padding: 15px;
}


.card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}


.card-summary {
  font-size: 14px;
  line-height: 1.4;
  margin-bottom: 10px;
}


.card-details,
.card-source {
  font-size: 12px;
  color: #666;
}

.card-details {
  margin-bottom: 5px;
}

.container {
  display: flex;
}

.main-content {
  flex: 1; /* Lebar konten utama */
  padding: 20px;
  background-color: #f0f0f0;
}

.sidebar {
  flex: 0 0 300px; /* Lebar sidebar */
  padding: 20px;
  background-color: #d3d3d3;
  position: relative;
}

.news-cards {
  position: absolute;
  bottom: 0;
  right: 0;
}

.card {
  width: 250px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 10px;
}

.card h2 {
  margin-top: 0;
  font-size: 18px;
}

.card p {
  font-size: 14px;
  margin-top: 5px;
  color: #555;
}

    </style>
    
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
Pelaku pembunuhan ini adalah AB (15).Dalam menjalankan aksinya AB tak sendiri, ia dibantu MA (190) yang kini juga sudah ditahan polisi.</p>
      <p class="card-source">Sumber: Denaa.com</p>
    </div>
    </div> 
    <div class="container">
    <div class="main-content">
      <!-- Konten utama di sini -->
      <h1>Judul Utama</h1>
      <p>Isi dari konten utama.</p>
    </div>
    <div class="sidebar">
      <!-- Berita sekilas di sini -->
      <div class="news-cards">
        <div class="card">
          <h2>Berita 1</h2>
          <p>Isi dari berita 1.</p>
        </div>
        <div class="card">
          <h2>Berita 2</h2>
          <p>Isi dari berita 2.</p>
        </div>
        <div class="card">
          <h2>Berita 3</h2>
          <p>Isi dari berita 3.</p>
        </div>
      </div>
    </div>
  </div>
    <?php

include_once "../../config/config.php";


echo $_SESSION['username'];

$query = "SELECT * FROM news";
$stmt = $conn->query($query);

if ($stmt->rowCount() > 0) {
  

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







