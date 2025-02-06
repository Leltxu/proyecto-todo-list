<?php
include '../views/cabecera.php';

?>

<h2>Lista de tareas</h2>


<?php

if (!empty($mensajse)) {
    echo $mensajse;
} else {
    foreach ($tasks as $tarea) {
        if ($tarea['completed'] == 0) {
            $completado='Sin completar';
        } else {
            $completado='Completado';
        }
        echo "<div class='tarea'>";
        echo "<h3>{$tarea['title']}</h3>";
        echo "<p>{$tarea['descripcion']}</p>";
        echo "<p><strong>$completado</strong></p>";
        echo "<a href='complete_task.php?id={$tarea['id']}' class='btn-completar'>Marcar como completado</a>";
        echo "<a href='delete_task.php?id={$tarea['id']}' class='btn-eliminar'>Eliminar</a>";
        echo "</div>";
    }
}

include '../views/pie.php';