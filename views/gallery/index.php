<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/css/global.css">
    <link rel="stylesheet" href="../../dist/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../dist/img/favicon.svg" type="image/x-icon">

    
    <title>Dashboard</title>
</head>

<body>
    <?php
    include "../komponen/sidebar.php";
    ?>
    <div id="main-content">
        <a href="create.php" class="btn btn-primary mb-3">Tambah Gambar Baru</a>
        <div class="row">
            <?php
            require_once "../../config/config.php";



            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT id, keterangan, gambar FROM gallery";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <?php
                            $image = base64_decode($row['gambar']);
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" class="card-img-top" alt="Image">';
                            ?>
                            <div class="card-body">
                                <p class='card-text'>Keterangan: <?= $row['keterangan'] ?></p>
                            </div>
                            <div class="card-footer text-center">
                                <a href='update.php?id=<?= $row['id'] ?>' class='btn btn-primary'>Edit</a>
                                <a href='delete.php?id=<?= $row['id'] ?>' class='btn btn-danger' onclick='return confirm("Apakah kamu yakin ingin menghapus data ini?")'>Hapus</a>
                            </div>
                        </div>
                    </div>
                <?php
                }

                echo '</div>';
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $conn = null;
            ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../dist/js/global.js"></script>
</body>

</html>
