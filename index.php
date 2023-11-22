<?php
session_start();

if (!isset($_SESSION['nis'])) {
    header("Location: views/dashboard");
    exit();
} else {
    header("Location: views/login");
    exit();
}

?>
