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
    <div id="main-content" style="background-color: transparent;">
        <?php
        ?>
        <div class="container">
            <div class="left">
                <div class="top">
                    <label for="fileInput" id="imageContainer" style="border-radius: 50%; ">
                        <div class="wrapper">
                            <?php
                            if (isset($_SESSION['image']) && !empty($_SESSION['image'])) {
                                $imageData = base64_decode($_SESSION['image']);
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" class="profile-pic" alt="Profile Pic" id="profilePic">';
                            } else {
                                echo '<img src="../../dist/img/profile-pic.jpg" class="profile-pic" alt="Default Profile Pic" id="profilePic">';
                            }
                            ?>
                            <i class="fas fa-edit edit-icon" style="font-size: 30px;"></i>
                            <!-- <img src="default_user_image.jpg"  height="150"> -->
                            <!-- <a href="fi" target="_blank"><i class="fas fa-edit edit-icon"></i></a> -->
                        </div>
                    </label>
                    <input type="file" id="fileInput" accept="image/*" onchange="displayImage(this)">

                    <h2 class="card-title" style="margin-top: 20px;">
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
                <div class="bottom" style="height: 200px;">
                    <p style="color:white;">
                        <?php

                        echo $_SESSION['description'];

                        ?>
                    </p>
                    <div class="card-footer text-center">
                        <a href="../../process/profil/print/print_pdf.php" class="btn btn-primary">Edit Profile <i
                                class="fas fa-edit"></i></a>
                        <a href="../../process/profil/print/print_pdf.php" class="btn btn-danger">Print Pdf<i
                                class="fas fa-download"></i> </a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="wrapping">
                    <h2>Bio Lengkap</h2>
                    <!-- <ul clas="list">
                        <li><strong>Name:</strong>
                            
                        </li>
                        <li><strong>Nis:</strong>
                            <?php echo $_SESSION['nis']; ?>
                        </li>
                        <li><strong>Phone:</strong>
                            <?php echo $_SESSION['phone']; ?>
                        </li>
                        <li><strong>Email:</strong>
                            <?php echo $_SESSION['email']; ?>
                        </li>
                        <li><strong>Class:</strong>
                            <?php echo $_SESSION['class']; ?>
                        </li>
                        <li><strong>Birth:</strong>
                            <?php echo $_SESSION['birth']; ?>
                        </li>
                        <li><strong>Address:</strong>
                            <?php echo $_SESSION['address']; ?>
                        </li>
                        <li><strong>Description:</strong>
                            <?php echo $_SESSION['description']; ?>
                        </li>
                    </ul> -->
                    <div class="kartu-name">
                        <div>Nis: &nbsp;<strong><?php echo $_SESSION['nis']; ?></strong></div>
                    </div>
                    <div class="kartu-name">
                        <div>Nama: &nbsp;<strong><?php echo $_SESSION['name']; ?></strong></div>
                    </div>
                    <div class="kartu-name">
                        <div>Kelas: &nbsp;<strong><?php echo $_SESSION['class']; ?></strong></div>
                    </div>
                    <div class="kartu-name">
                        <div>TanggalLahir: &nbsp;<strong><?php echo $_SESSION['birth']; ?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function displayImage(input) {
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('profilePic').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>