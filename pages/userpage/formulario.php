<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/styleform.css">
<title>Formulario de Tareas</title>

</head>
<body>

<div class="container">
   
    <div class="form-container">

        <form action="#" method="post">
            <label for="nombre_tarea">Nombre de Tarea:</label>
            <input type="text" id="nombre_tarea" name="nombre_tarea" required>

            <label for="fecha_finalizacion">Fecha de Finalización:</label>
            <input type="date" id="fecha_finalizacion" name="fecha_finalizacion" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="etiquetas">Etiquetas:</label>
            <input type="text" id="etiquetas" name="etiquetas">

            <label for="recordatorio">Recordatorio:</label>
            <input type="date" id="recordatorio" name="recordatorio" required>

            <input type="submit" value="Finalizar">
        </form>
    </div>
    <img src="../../img/1.png" alt="Imagen" width="400">

</div>

</body>
</html>