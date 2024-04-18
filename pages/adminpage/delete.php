<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from tareas where id=$id ");
    if ($sql==1) {
        echo '<div>Tarea eliminada correctamente</div>';
    } else {
        echo '<div>Error al eliminar la tarea</div>';
    }
    
}
?>

2 tablas nuevas
1-status_task