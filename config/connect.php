<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "gestor_tareas";

$connect = mysqli_connect($host, $user, $password, $db);
mysqli_query($connect,"SET NAMES 'utf8'");

if(!$connect){
    echo "No fue posible conectarse con el servidor MySQL.";
    }
?>