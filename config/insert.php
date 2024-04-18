<?php
require_once('connect.php');
$name_task = $_POST['name_task'];
$fecha_finalizacion = $_POST['fecha_finalizacion'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$prioridad = $_POST['prioridad'];   
$numero = $_POST['numero'];

$query = "INSERT INTO tareas (name_task, description, fecha, numero, prioridad , categoria)
VALUES ('$name_task', '$descripcion', '$fecha_finalizacion', '$numero','$prioridad', '$categoria')";
echo $query;
$connect->query($query);
header("Location: ../pages/adminpage/tareas.php");
?>