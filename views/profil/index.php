<?php
session_start();

if (isset($_SESSION['nis']) == null ) {
    header("Location: ../dashboard/");
    exit();
}
?>