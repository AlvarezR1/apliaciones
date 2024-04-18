<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de Tareas</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            padding-top: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .col {
            margin-bottom: 20px;
        }

        .list-group-item {
            cursor: pointer;
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #dee2e6;
            background-color: #fff;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
        }

        h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .btn-exit {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545;
            border: none;
            color: #fff;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-exit:hover {
            background-color: #c82333;
        }

        .list-group {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
        }

        .list-group h2 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #333;
        }

        .list-group-item {
            background-color: #f8f9fa;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }

        .list-group-item:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

<a href="../../config/logout.php" class="btn btn-exit">Salir</a>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="list-group">
                <h2 class="text-center">Pendientes</h2>
                <div class="list-group" id="backlog">
                    <!-- Aquí van las tareas pendientes -->
                </div>
            </div>
        </div>
        <div class="col">
            <div class="list-group">
                <h2 class="text-center">En progreso</h2>
                <div class="list-group" id="en-progreso">
                    <!-- Aquí van las tareas en progreso -->
                </div>
            </div>
        </div>
        <div class="col">
            <div class="list-group">
                <h2 class="text-center">Completadas</h2>
                <div class="list-group" id="finalizado">
                    <!-- Aquí van las tareas finalizadas -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // Función para cargar los datos desde la base de datos y mostrarlos en las listas
        function cargarDatos() {
            $.ajax({
                url: '../../config/obtener_tareas.php', // Script PHP para obtener las tareas desde la base de datos
                method: 'GET',
                success: function(response) {
                    // Procesa los datos obtenidos y muestra las tareas en las listas correspondientes
                    response.forEach(function(tareas) {
                        $('#' + tareas.id).append('<div class="list-group-item" id="' + tareas.name_task + '">' + tareas.description + '</div>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error); // Maneja errores
                }
            });
        }

        // Llama a la función para cargar los datos al cargar la página por primera vez
        cargarDatos();

        // Manejador de evento para mover las tareas entre listas
        $('.list-group').on('click', '.list-group-item', function(){
            var taskId = $(this).attr('id');
            var currentListId = $(this).closest('.list-group').attr('id');
            var newListId;
            // Lógica para determinar la lista de destino
            switch (currentListId) {
                case 'backlog':
                    newListId = 'en-progreso';
                    break;
                case 'en-progreso':
                    newListId = 'finalizado';
                    break;
                default:
                    newListId = 'backlog';
            }
            // Aquí enviarías una solicitud AJAX para actualizar la base de datos
            $.ajax({
                url: 'actualizar_tarea.php', // Ruta al script PHP
                method: 'POST',
                data: { taskId: taskId, newListId: newListId },
                success: function(response) {
                    // Maneja la respuesta si es necesaria
                },
                error: function(xhr, status, error) {
                    console.error(error); // Maneja errores
                }
            });
            $(this).appendTo('#' + newListId);
        });
    });
</script>


</body>
</html>
