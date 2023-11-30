<?php
require_once '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nis = $_POST['nis'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];

    $birth = $_POST['birth'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
    } else {
        $image = '';
    }

    try {

        $stmt = $conn->prepare("INSERT INTO user (nis, username, password, role) VALUES (:nis, :username, :password, :role)");
        $stmt->bindParam(':nis', $nis);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);
        $stmt->execute();


        $stmt = $conn->prepare("INSERT INTO profil (nis, name, email, phone, class, birth, adress, description, image) VALUES (:nis, :name, :email, :phone, :class, :birth, :adress, :description, :image)");
        $stmt->bindParam(':nis', $nis);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':birth', $birth);
        $stmt->bindParam(':adress', $address);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        $stmt->execute();


        header("Location: ../../views/dashboard/");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
} else {

    header("Location: ../../views/register/");
    exit();
}
