<?php
session_start();

if (isset($_SESSION['nis']) == null) {
    header("Location: ../dashboard/");
    exit();
}
?>

<?php

require_once "../../config/config.php";

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../../dist/css/profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php

    include "../komponen/sidebar.php";

    ?>
    <div id="main-content">
        <?php
        include "../komponen/navbar.php"
            ?>
        <div class="container">
            <div class="left">
                <div class="top">
                    <div class="profile-container">
                        <img src="default_user_image.jpg" class="profile-pic" alt="User Image" width="150" height="150">
                        <!-- <a href="fi" target="_blank"><i class="fas fa-edit edit-icon"></i></a> -->
                    </div>
                    <h2 class="card-title">User Name</h2>
                    <p class="card-text">User Status</p>
                </div>
                <div class="bottom">
                    <p style="color:white;">bottom</p>
                    <div class="card-footer text-center">
                        <a href="edit_user.php" class="btn btn-primary">Edit Profile <i class="fas fa-edit"></i></a>
                        <a href="logout.php" class="btn btn-danger">Logout <i class="fas fa-sign-out"></i> </a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="wrapping">
                    <h1 class='text-center'>Ngga ada datanya woy</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>