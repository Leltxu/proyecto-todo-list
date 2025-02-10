<?php
require_once '../config/database.php';
require_once '../private/functions.php';
if (isset($_GET['id']) && isset($_GET['value'])) {
    if ($_GET['value'] == 0) {
        $sql = "UPDATE tasks SET completed=1 WHERE id = {$_GET['id']}";
    } else {
        $sql = "UPDATE tasks SET completed=0 WHERE id = '{$_GET['id']}'";
    }
    query($conexion, $sql);
    header('Location: index.php');
} else {
    echo 'No se ha recibido el id de la tarea a eliminar';
    echo '<a href="index.php">Volver</a>';;
}