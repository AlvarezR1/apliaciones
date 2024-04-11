<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "gestor_tareas";

$conexion = new mysqli ($host, $user, $password, $db);
if ($conexion->connect_errno){
    echo "fallo la conexion con la base de datos" . $conexion->connect_error;
}
?>