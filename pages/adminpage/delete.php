<?php
require_once('../../config/connect.php');

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $id); 
    $stmt->execute();

    header("Location: usuarios.php");
    
    $stmt->close();
}

$query = "SELECT * FROM users";
$result = $connect->query($query);
?>