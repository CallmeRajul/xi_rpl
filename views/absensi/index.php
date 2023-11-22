<?php
// Start the session
// session_start();

// // Check if the user is already logged in
// if (isset($_SESSION['nis']) == null ) {
//     // Redirect to the dashboard if already logged in
//     header("Location: ../dashboard/");
//     exit();
// }

// Continue with the rest of your login page content
?>

<html>
    <head>
        <link rel="stylesheet" href="../../dist/css/global.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">

    </head>
    <body>
        <?php
        
        include "../komponen/sidebar.php";
        
        ?>
        <div id="main-content">
            <?php 
            include "../komponen/navbar.php";
            ?>
            <div class="absensi">
                
            </div>
        </div>
    </body>
</html>