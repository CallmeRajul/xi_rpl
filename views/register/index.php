<?php
session_start();

if (isset($_SESSION['nis'])) {
    header("Location: ../dashboard/");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XI-RPL</title>
    <link rel="stylesheet" href="../../dist/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
    </style>
</head>

<body>
    <nav>
        <div class="content">
            <p class="brand"><b>REGISTER</b></p>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="logo">
            <!-- <img class="logo-image" src="../../dist/img/rpl.png" alt="LOGO"> -->
            <p class="header">Sign Up</p>
            <p>Sign In First To Log In To Our Website</p>
        </div>
        <div class="form-wrapper">
            <form action="../../process/register/register_process.php" method="post" id="myForm"
                enctype="multipart/form-data">
                <!-- First Group -->
                <div class="input-group">
                    <input type="number" id="nis" name="nis" placeholder="NIS*" required>
                    <input type="text" name="username" id="username" placeholder="Username*" style="margin-top: 30px;"
                        required>
                    <div class="password-container">
                        <input type="password" placeholder="Password*" id="password" name="password">
                        <i class="fa-solid fa-eye" id="eye"></i>
                    </div>
                    <select name="role" id="role">
                        <option value="student">Student*</option>
                        <option value="teacher">Teacher*</option>
                    </select>
                </div>
                <!-- Second Group -->
                <div class="input-group" style="display: none;">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                    <input type="email" name="email" id="email" placeholder="Email" style="margin-top: 30px;" required>
                    <select name="class" id="class">
                        <option value="XIIRPL">XII-RPL</option>
                        <option value="XIRPL">XI-RPL</option>
                        <option value="XRPL">XI-RPL</option>
                    </select>
                </div>
                <!-- Third Group -->
                <div class="input-group" style="display: none;">

                    <input type="date" name="birth" id="birth" placeholder="Birth" style="margin-top: 30px;" required>
                    <input type="text" placeholder="Address" id="address" name="address" style="margin-top: 30px;">
                    <input type="text" placeholder="Description" id="description" name="description"
                        style="margin-top: 30px;">
                    <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" style="margin-top: 30px;">
                    <button class="ripple">Log In</button>
                </div>
            </form>
        </div>
        <div class="form-button">
            <a href="#" class="previous-next-btn" onclick="changeForm(-1)"><i class="fas fa-arrow-left"></i></a>
            <a href="#" class="previous-next-btn" onclick="changeForm(1)"><i class="fas fa-arrow-right"></i></a>
        </div>
        <p class="register-text">Have An Account? <a href="../login">Log In</a></p>
        <p class="copyright"> © 2023 XI RPL Copyright Dimensions</p>
    </div>
    <script src="../../dist/js/register.js"></script>
</body>

</html>