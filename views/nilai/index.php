<?php

session_start();

if (isset($_SESSION['nis']) == null) {
    header("Location: ../dashboard/");
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
    <link rel="stylesheet" href="../../dist/css/nilai.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">
    <link rel="shortcut icon" href="../../dist/img/favicon.svg" type="image/x-icon">
    <title>Nilai</title>
</head>

<body>
    <?php

    include "../komponen/sidebar.php";

    ?>
    <div id="main-content">
        <?php

        include "../komponen/navbar.php"
            ?>
        <div class="judul">
            <div class="judul-txt">
                <h2>Nilai Siswa:</h2>
            </div>
            <div class="pdfbutton">
                <button class="btn"><i class="fa fa-download" aria-hidden="true"></i></button>
            </div>
        </div>

        <div class="container">

            <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'student') {
                include "student.php";
            }

            if (isset($_SESSION['role']) && $_SESSION['role'] == 'teacher') {
                include "teacher.php";
            }
            ?>
        </div>

    </div>
    <script src="../../dist/js/global.js"></script>
</body>

</html>