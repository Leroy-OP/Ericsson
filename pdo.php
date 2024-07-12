<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $host = 'localhost';
    $dbname = 'Assignment';
    $username_db = 'Leroy';
    $password_db = 'Leroy@Project';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $statement = $conn->prepare("INSERT INTO Users (username, email, password ) VALUES (:userName, :email, :password)");

        // Bind parameters
        $statement->bindParam(':userName', $userName);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);

        // Execute the statement
        $statement->execute();

        echo "Inserted into database successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; // Close the database connection
}
?>