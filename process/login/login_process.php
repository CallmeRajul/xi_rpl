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


            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Start a session
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