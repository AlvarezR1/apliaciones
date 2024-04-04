<?php 
require_once("connect.php");

function validarSesion($connect, $email, $password)
{
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $resultado = mysqli_query($connect, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);

        if ($usuario['password'] == $password) {

            return $usuario;
        } else {

            return 'contraseña';
        }
    } else {

        return 'email';
    }
}

?>