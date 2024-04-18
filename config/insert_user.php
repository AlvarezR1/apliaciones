<?php
require_once('connect.php');
$name= $_POST['name'];
$rol= $_POST['rol'];
$password= $_POST['password'];
$email= $_POST['email'];
$status= $_POST['status'];


$query = "INSERT INTO users ( name , rol , password , email, status)
VALUES ('$name', '$rol', '$password', '$email','$status')";
echo $query;
$connect->query($query);
header("Location: ../pages/adminpage/usuarios.php");
?>