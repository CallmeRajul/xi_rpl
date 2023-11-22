<?php
session_start();

if (isset($_SESSION['nis']) == null ) {

    header("Location: ../dashboard/");
    exit();
}

?>

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
    <link rel="stylesheet" href="../../dist/css/jadwal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">
    <title>Dashboard</title>
</head>

<body>
    <?php 
    
    include "../komponen/sidebar.php";
    
    ?>
    <div class="jadwal">
    <div class="schedule-table">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Senin</th>
                    <th>Selasa</th> 
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>08:00 - 09:30</td>
                    <td>Matematika</td>
                    <td>Bahasa Inggris</td>
                    <td>Pendidikan Jasmani</td>
                    <td>Kimia</td>
                    <td>Bahasa Indonesia</td>
                </tr>
                <tr>
                    <td>10:00 - 11:30</td>
                    <td>Bahasa Indonesia</td>
                    <td>Sejarah</td>
                    <td>Fisika</td>
                    <td>Matematika</td>
                    <td>Bahasa Inggris</td>
                </tr>
                <tr>
                    <td>13:00 - 14:30</td>
                    <td>IPA</td>
                    <td>Seni Budaya</td>
                    <td>Geografi</td>
                    <td>Ekonomi</td>
                    <td>Komputer</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <script scr="../../dist/js/dashboard.js"></script>
</body>
</html>
<!-- titid -->