<?php
require_once('../../config/connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tareas WHERE id = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: tareas.php");
    exit();
} else {
    echo "Error: No se proporcionó un ID de tarea.";
}
?>
