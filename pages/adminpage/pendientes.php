<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Vista_Admin</title>
</head>
<body class="bg-light text-dark">
    <!-- Sidebar -->
    <div class="d-flex">
        <div class="bg-dark min-vh-100 p-3" style="width: 300px;">
            <div class="text-light mb-4">
                <span class="fs-4 d-none d-sm-inline">CRUD OPERATIONS</span>
            </div>
            <ul class="nav flex-column">
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
                <hr class="d-sm-none">
        <div class="mt-auto">
        <a href="../../config/logout.php" class="nav-link">
                <i class="fs-5 fas fa-sign-out-alt"></i><span class="fs-4 d-none ms-3 d-sm-inline">Salir</span>  
            </a>
        </div>
            </ul>
       
        </div>
    <!-- /Sidebar -->

    <!-- Page Content -->
    <div class="bg-light" style="flex: 1;">
        <div class="bg-secondary p-3">
            <h1 class="text-light">PENDIENTES</h1>
        </div>
    </div>
    <!-- /Page Content -->
    
    </div>
</body>
</html>
