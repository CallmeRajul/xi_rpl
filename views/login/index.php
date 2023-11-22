<?php
session_start();

if (isset($_SESSION['nis'])) {
    header("Location: ../dashboard/");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<style>
    button {
        margin-top: 30px;
        width: 40%;
        height: 43px;
        background-color: white;
        color: black;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        cursor: pointer;
    }

    button:focus {
        outline: none;
    }

    button .ripple {
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        transform: scale(0);
        animation: ripple 0.3s linear;
    }

    @keyframes ripple {
        to {
            transform: scale(2.5);
            opacity: 0;
        }
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XI-RPL</title>
    <link rel="stylesheet" href="../../dist/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <nav>
        <div class="content">
            <p class="brand"><b>WEBSITE</b></p>
        </div>
        <div class="content-links">
            <a href="#" class="nav-links">Sign In</a>
            <a href="#" class="nav-links">Home</a>
            <a href="#" class="nav-links">About</a>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="logo">
            <img class="logo-image" src="../../dist/img/rpl.png" alt="LOGO">
            <p class="header">Sign In</p>
            <p>Log In First To Access Our Web</p>
        </div>
        <div class="form-wrapper">
            <form action="../../process/login/login_process.php" method="post">
                <input type="text" name="username" id="username" placeholder="username">
                <div class="password-container">
                    <input type="password" placeholder="Password" id="password" name="password">
                    <i class="fa-solid fa-eye" id="eye"></i>
                </div>
                <p class="register-text">Don't Have An Account? <a href="../register">Register Here</a></p>
                <button class="ripple">Log In</button>
            </form>
        </div>
        <p class="copyright"> © 2023 XI RPL Copyright Dimensions</p>

    </div>
    <script>
        const passwordInput = document.querySelector("#password")
        const eye = document.querySelector("#eye")
        eye.addEventListener("click", function () {
            this.classList.toggle("fa-eye-slash")
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
            passwordInput.setAttribute("type", type)
        })
    </script>
    <script src="../../dist/js/ripple.js">
    </script>
    <script src="../../dist/js/login.js"></script>
</body>

</html>