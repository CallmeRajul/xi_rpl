<?php
    
require_once '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    try {

        $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();


        if ($stmt->rowCount() > 0) {

            $row = $stmt->fetch(PDO::FETCH_ASSOC);


            if (password_verify($password, $row['password'])) {
                session_start();

            
                $_SESSION['nis'] = $row['nis'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];


                $nis = $_SESSION['nis'];
                $stmt = $conn->prepare("SELECT * FROM profil WHERE nis = :nis");
                $stmt->bindParam(":nis", $nis);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    
                    $_SESSION['image'] = $row['image'];
                    $_SESSION['description'] = $row['description'];
                    $_SESSION['name'] = $row['name']; 
                    $_SESSION['phone'] = $row['phone']; 
                    $_SESSION['email'] = $row['email']; 
                    $_SESSION['class'] = $row['class']; 
                    $_SESSION['birth'] = $row['birth']; 
                    $_SESSION['address'] = $row['address'];

                    
                }

                
                header("Location: ../../views/dashboard");
               
            } else {
                echo "Invalid password";
            }
        } else {
            echo "User not found";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


    $conn = null;
} else {
    echo "<script>alert('password salah!');</script>";
    header("Location: ../../views/login");
    exit();
}
?>