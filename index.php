<?php
require_once("config/functions.php");

$emailError = '';
$passwordError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $resultado = validarSesion($connect, $email, $password);

    if (is_array($resultado)) {
        session_start();
        $_SESSION['user'] = $resultado['name'];
        $_SESSION['rol'] = $resultado['rol'];
        $_SESSION['id'] = $resultado['id'];
        $rol = $resultado['rol'];
        if ($rol == 1) {
            header("Location: pages/adminpage/usuarios.php");
            exit();
        } elseif ($rol == 2) {
            header("Location: pages/userpage/lista_tareas.php");
            exit();
        }
    } elseif ($resultado == 'contraseña') {
        $passwordError = 'Contraseña incorrecta';
    } elseif ($resultado == 'email') {
        $emailError = 'Email no encontrado';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<body>
        <div class="container-card">
            <div class="row login-card">
                <div class="col-md-5 img-login d-none d-md-block">
                </div>
                <div class="col-md-7 form-login-body">
                    <div class="form-login">
                        <h4 class="col-md-5 img-logo ">
                        <img src="img/logoUNID.png" alt="logo">
                        </h4>
                        <form action="#" class="form-login" method="POST">
                            <div class="mb-4">
                                <input type="text" name="email" placeholder="Correo electrónico" required>
                                <span class="error-mensaje-login"><?php echo $emailError; ?></span>
                            </div>
                            <div class="mb-4">
                                <input type="password" name="password" placeholder="Contraseña" required>
                                <span class="error-mensaje-login"><?php echo $passwordError; ?></span>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="w-100 btn-login">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</body>
</html>