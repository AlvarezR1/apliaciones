<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Vista_Admin</title>
</head>
<body>
    <!-- Page Content -->
   
<!-- Page Content -->
<div class="w3-sidebar w3-light-grey" style="width: 300px;"> <!-- Cambia el valor de width según lo que necesites -->
    <div class="bg-dark p-2 d-flex flex-column h-100">
        <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
            <span class="fs-4 d-none d-sm-inline">CRUD OPERATIONS</span>
        </a>
        <ul class="nav nav-pills flex-column mt-4 mb-auto">
            <li class="nav-item">
                <a href="usuarios.php" class="nav-link">
                    <i class="fs-5 fas fa-user"></i><span class="fs-4 ms-3 d-none d-sm-inline">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="tareas.php" class="nav-link">
                    <i class="fs-5 fas fa-th-large"></i><span class="fs-4 ms-3 d-none d-sm-inline">Tareas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pendientes.php" class="nav-link">
                    <i class="fs-5 fas fa-clipboard"></i><span class="fs-4 ms-3 d-none d-sm-inline">Pendientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="atrasados.php" class="nav-link">
                    <i class="fs-5 fas fa-tachometer-alt"></i><span class="fs-4 ms-3 d-none d-sm-inline">Atrasados</span>  
                </a>
            </li>
            <li class="nav-item">
                <a href="completados.php" class="nav-link">
                    <i class="fs-5 fas fa-check"></i><span class="fs-4 d-none ms-3 d-sm-inline">Completados</span>  
                </a>
            </li>
        </ul>
        <hr class="d-sm-none">
        <div class="mt-auto">
            <a href="config/logout.php" class="nav-link">
                <i class="fs-5 fas fa-sign-out-alt"></i><span class="fs-4 d-none ms-3 d-sm-inline">Salir</span>  
            </a>
        </div>
    </div>
</div>
    <!-- Page Content -->

    <?php
    require_once('../../config/connect.php');
    $query = "SELECT * FROM users";
    $result = $connect->query($query);
    ?>

    <div style="margin-left:20%">
        <div class="w3-container w3-teal">
            <h1>USUARIOS</h1>
        </div>
        <div class="w3-container">
            <div style="margin-top:25px">
            <table class="w3-table-all w3-card-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Contraseña</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['rol']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <a href="archivodeupdate.php?ID=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                                <a href="../../config/archivodelete.php.php?ID=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>