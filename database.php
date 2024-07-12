<?php
$conn = new PDO("mysql:host=localhost;","Leroy","Leroy@Project");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo("Connected Successfully");
try{
    
    $sql="CREATE DATABASE IF NOT EXISTS Assignment";
    $conn->exec($sql);
}catch(PDOException $error){
    echo("An error occured".$error->getMessage());
}
echo("Inserted into Database successfully");

?> 