<?php
require_once '../config/database.php';
require_once '../private/functions.php';
if (isset($_GET['id'])) {
    $sql = "DELETE FROM tasks WHERE id = {$_GET['id']}";
    query($conexion, $sql);
    header('Location: index.php');
} else {
    echo 'No se ha recibido el id de la tarea a eliminar';
    echo '<a href="index.php">Volver</a>';;
}