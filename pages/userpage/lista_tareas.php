<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de Tareas</title>
<style>
    /* Estilos para la apariencia de la lista */
    .container {
        display: flex;
        justify-content: space-between;
    }
    .task-list {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: 30%;
    }
    .task-item {
        margin-bottom: 5px;
        padding: 5px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 3px;
        cursor: pointer;
    }
    .task-item:hover {
        background-color: #e9e9e9;
    }
</style>
</head>
<body>

<h2>Lista de Tareas</h2>

<div class="container">
    <div class="task-list" id="pendientes">
        <h3>Pendientes</h3>
        <?php
        require_once('../../config/connect.php');
        $query = "SELECT * FROM tareas";
        $result = $connect->query($query);
        while($row = $result->fetch_assoc()) {
            echo '<div class="task-item" onclick="moveToAtrasados(this)">' . $row['description'] . '</div>';
        }
        ?>
    </div>

    <div class="task-list" id="atrasados">
        <h3>Atrasados</h3>
    </div>

    <div class="task-list" id="completados">
        <h3>Completados</h3>
    </div>
</div>

<script>
    function moveToAtrasados(task) {
        var atrasadosList = document.getElementById('atrasados');
        atrasadosList.appendChild(task);
        task.setAttribute('onclick', 'moveToCompletados(this)');
    }

    function moveToCompletados(task) {
        var completadosList = document.getElementById('completados');
        completadosList.appendChild(task);
        task.removeAttribute('onclick');
    }

    var completadosList = document.getElementById('completados');
    completadosList.addEventListener('click', function(event) {
        var target = event.target;
        if (target.classList.contains('task-item')) {
            moveToAtrasados(target);
        }
    });
</script>

</body>
</html>

