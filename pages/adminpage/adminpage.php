<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .bg-dark {
            background-color: #343a40; /* Color de fondo oscuro */
        }
        .text-white {
            color: #ffffff; /* Color de texto blanco */
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">

            <div class="bg-dark col-auto col-md-2 min-vh-100">
                <div class="bg-dark p-2 d-flex flex-column h-100">
                    <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">CRUD OPERATIONS</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4 mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-home"></i><span class="fs-4 ms-3 d-none d-sm-inline">INICIO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-user"></i><span class="fs-4 ms-3 d-none d-sm-inline">usuarios</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-th-large"></i><span class="fs-4 ms-3 d-none d-sm-inline">tareas</span>
                            </a>
                        </li>
                         
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-clipboard"></i><span class="fs-4 ms-3 d-none d-sm-inline">pendientes</span>
                            </a>
                        </li>
                         
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-tachometer-alt"></i><span class="fs-4 ms-3 d-none d-sm-inline">atrasados</span>  
                            </a>
                        </li>
                         
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-check"></i><span class="fs-4 d-none ms-3 d-sm-inline">completados</span>  
                            </a>
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                    <div class="mt-auto">
                    <a href="#" class="nav-link text-white" >
                                <i class="fs-5 fas fa-sign-out-alt"></i><span class="fs-4 d-none ms-3 d-sm-inline">salir</span>  
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
