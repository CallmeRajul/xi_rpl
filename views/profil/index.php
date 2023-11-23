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
    <link rel="stylesheet" href="../../dist/css/global.css">
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
                        <?php
                        $imageData = base64_decode($_SESSION['image']);
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" class="profile-pic" alt="User Image" width="150" height="150" >';
                        ?>

                        <!-- <img src="default_user_image.jpg"  height="150"> -->
                        <!-- <a href="fi" target="_blank"><i class="fas fa-edit edit-icon"></i></a> -->
                    </div>
                    <h2 class="card-title">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                    </h2>
                    <p class="card-text">
                        <?php

                        echo $_SESSION['role'];

                        ?>
                    </p>
                </div>
                <div class="bottom">
                    <p style="color:white;">
                        <?php

                        echo $_SESSION['description'];

                        ?>
                    </p>
                    <div class="card-footer text-center">
                        <a href="edit_user.php" class="btn btn-primary">Edit Profile <i class="fas fa-edit"></i></a>
                        <a href="logout.php" class="btn btn-danger">Print Pdf<i class="fas fa-download"></i> </a>
                    </div>
                </div>
            </div>
            <div class="right">

                <div class="wrapping">
                    <h2>Bio Lengkap</h2>
                    <p>
                        <?php
                        echo '<strong>Name:</strong> ' . $_SESSION['name'] . '<br>';
                        echo '<strong>Phone:</strong> ' . $_SESSION['phone'] . '<br>';
                        echo '<strong>Email:</strong> ' . $_SESSION['email'] . '<br>';
                        echo '<strong>Class:</strong> ' . $_SESSION['class'] . '<br>';
                        echo '<strong>Birth:</strong> ' . $_SESSION['birth'] . '<br>';
                        echo '<strong>Address:</strong> ' . $_SESSION['address'] . '<br>';
                        echo '<strong>Description:</strong> ' . $_SESSION['description'];
                        ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>