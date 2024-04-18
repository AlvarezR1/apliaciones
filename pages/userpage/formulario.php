<?php
require_once('../../config/connect.php');
$query = "SELECT * FROM tareas";
$result = $connect->query($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/styleform.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>Formulario de Tareas</title>

</head>
<body>

<div class="container" style="display: flex;width: 50%;">

    <div class="form-container">

        <form action="../../config/insert.php" method="POST">
            <label for="name_task" class="form-label">Nombre de Tarea:</label>
            <input type="text" class="form-control" id="name_task" name="name_task" required>
            
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea id="descripcion" class="form-control" name="descripcion" rows="4" required></textarea>
            
            <br/><label for="fecha_finalizacion" class="form-label">Fecha de Finalización:</label>
            <input type="date" class="form-control" id="fecha_finalizacion" name="fecha_finalizacion" required>

            <select id="prioridad" name="prioridad" for="prioridad" class="form-select" aria-label="Default select example">
            <option selected>Prioridad:</option>
            <option value="1">Alta</option>
            <option value="2">Media</option>
            <option value="3">Baja</option>
            </select>

            <br/><select id="categoria" name="categoria" for="categoria" class="form-select" aria-label="Default select example">
            <option selected>Categoria:</option>
            <option value="1">Alta</option>
            <option value="2">Media</option>
            <option value="3">Baja</option>
            </select>

            <br/><label for="numero" class="form-label">Recordatorio:</label>
            <input type="text" class="form-control" id="numero" name="numero" required>

            <button type="submit" class="btn btn-outline-success">Guardar</button>
        </form>
    </div>
    <img src="../../img/1.png" alt="Imagen" width="400">

</div>  

</body>
</html>