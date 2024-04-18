<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de Tareas</title>
    <style>
        body {
            background-image: url('https://image.freepik.com/vector-gratis/fondo-espacial-estrellas-negras-espacio-oscuro-ilustracion-vectorial-dibujos-animados-estilo-realista_79225-303.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            padding-top: 20px;
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
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center">Pendientes</h2>
            <div class="list-group" id="en-progreso">
                <!-- Aquí van las tareas en progreso -->
            </div>
        </div>
        <div class="col">
            <h2 class="text-center">    Atrasados</h2>
            <div class="list-group" id="prueba">
                <!-- Aquí van las tareas en prueba -->
            </div>
        </div>
        <div class="col">
            <h2 class="text-center">Completados</h2>
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
            // Por ahora, simplemente movemos la tarea en la interfaz sin actualizar la base de datos
            $(this).appendTo('#' + newListId);
        });
    });
</script>

</body>
</html>
