<?php

try {
    $host='localhost';
    $user='root';
    $password='';
    $database='todo_list';
    $conexion = mysqli_connect($host, $user, $password, $database);
} catch (Exception $e) {
    echo 'No se a podido conectar a la base de datos';
}