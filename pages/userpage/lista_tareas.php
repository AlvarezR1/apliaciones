<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de Tareas</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            padding-top: 20px;
        }

        .col {
            margin-bottom: 20px;
        }

        .list-group-item {
            cursor: pointer;
        }

        .list-group-item:hover {
            background-color: #e9ecef;
        }

        .list-group-item:not(:last-child) {
            margin-bottom: 5px;
        }

        h2 {
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Backlog</h2>
            <div class="list-group" id="backlog">
                <!-- Aquí van las tareas del backlog -->
                <?php
                // Tu código PHP para mostrar las tareas del backlog desde la base de datos
                ?>
            </div>
        </div>
        <div class="col">
            <h2>En Progreso</h2>
            <div class="list-group" id="en-progreso">
                <!-- Aquí van las tareas en progreso -->
            </div>
        </div>
        <div class="col">
            <h2>Prueba</h2>
            <div class="list-group" id="prueba">
                <!-- Aquí van las tareas en prueba -->
            </div>
        </div>
        <div class="col">
            <h2>Finalizado</h2>
            <div class="list-group" id="finalizado">
                <!-- Aquí van las tareas finalizadas -->
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.list-group-item').on('click', function(){
            var taskId = $(this).attr('id');
            var currentListId = $(this).closest('.list-group').attr('id');
            var newListId;
            switch (currentListId) {
                case 'backlog':
                    newListId = 'en-progreso';
                    break;
                case 'en-progreso':
                    newListId = 'prueba';
                    break;
                case 'prueba':
                    newListId = 'finalizado';
                    break;
                default:
                    newListId = 'backlog';
            }
            // Aquí enviarías una solicitud AJAX para actualizar la base de datos
            // Puedes usar jQuery $.post() o $.ajax() para enviar la solicitud
            // Por ejemplo:
            // $.post('actualizar_tarea.php', {taskId: taskId, newListId: newListId}, function(data){
            //    // Actualizar la interfaz si es necesario
            // });
            // Reemplaza 'actualizar_tarea.php' con la URL de tu script PHP que maneja la actualización de la tarea
            // Y asegúrate de pasar los datos necesarios a tu script PHP, como taskId y newListId
            // Por razones de seguridad y buenas prácticas, asegúrate de validar y sanitizar los datos antes de usarlos en consultas SQL
            // Además, recuerda manejar las respuestas y errores del servidor en la función de devolución de llamada (callback) de AJAX
            // Por ahora, simplemente movemos la tarea en la interfaz sin actualizar la base de datos
            $(this).appendTo('#' + newListId);
        });
    });
</script>

</body>
</html>


