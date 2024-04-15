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
<title>Formulario de Tareas</title>

</head>
<body>

<div class="container">

    <div class="form-container">

        <form action="../../config/insert.php" method="POST">
            <label for="name_task" class="form-label">Nombre de Tarea:</label>
            <input type="text" class="form-control" id="name_task" name="name_task" required>
            
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea id="descripcion" class="form-control" name="descripcion" rows="4" required></textarea>
            
            <label for="fecha_finalizacion" class="form-label">Fecha de Finalización:</label>
            <input type="date" class="form-control" id="fecha_finalizacion" name="fecha_finalizacion" required>

            <label for="prioridad" class="form-label">prioridad:</label>
            <input type="text" class="form-control" id="prioridad" name="prioridad">

            <label for="categoria" class="form-label">categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria">

            <label for="numero" class="form-label">Recordatorio:</label>
            <input type="text" class="form-control" id="numero" name="numero" required>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    <img src="../../img/1.png" alt="Imagen" width="400">

</div>  

</body>
</html>