<?php
require_once '../config/database.php';
require_once '../private/functions.php';

if (isset($_POST['add_task'])) {
    $titulo=sanear($_POST['titulo']);
    $descripcion=sanear($_POST['descripcion']);
    $errores=[];
    $errores['titulo']=validar($titulo, 'titulo');
    if (empty($errores['titulo'])) {
        $sql = "INSERT INTO tasks (title,descripcion) VALUES ('$titulo','$descripcion')";
        query($conexion, $sql);
        header('Location: index.php');
        exit;
    } else {
        include 'add_task.php';
        exit();
    }
}

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'add') {
        include 'add_task.php';
    }
} else {
    $sql = "SELECT * FROM tasks";
    $tasks = consulta($conexion, $sql);
    if (empty($tasks)) {
        $mensajse = "<p class='vacio'>No hay tareas creadas. <a href='index.php?page=add'>Añadir tarea</a></p>";
    }
    include 'view_task.php';
}