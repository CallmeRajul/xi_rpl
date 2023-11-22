<?php
include "koneksi.php";

try {
    // Check if ID parameter is set in the URL
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Create a new PDO instance to connect to the database
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $pass);
        
        // Use prepared statement to prevent SQL injection
        $stmt = $pdo->prepare("DELETE FROM gallery WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if($stmt->execute()){
            echo "Data berhasil dihapus. <a href='read.php'>Lihat Data</a>";
        } else {
            echo "Error: " . implode(" ", $stmt->errorInfo());
        }

        // Close the statement
        $stmt = null;
    } else {
        echo "ID tidak valid.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the PDO connection
$pdo = null;
?>
