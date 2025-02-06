<?php
// Obtener datos de una consulta
function consulta($conexion, $sql) {
    $resul=mysqli_query($conexion, $sql);
    $resultado=[];
    while ($fila = mysqli_fetch_assoc($resul)) {
        $resultado[]=$fila;
    }
    return $resultado;
}

function query($conexion, $sql) {
    try {
        mysqli_query($conexion, $sql);
    } catch (Exception $e) {
        echo 'Error al hacer la consulta en la base de datos: ' . $e->getMessage();
    }
    
}

// Sanear datos
function sanear($texto) {
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
}
// Validar datos
function validar($texto, $tipo) {
    if ($tipo == 'titulo') {
        if (empty($texto)) {
            return 'El titulo es obligatorio';
        } else if (strlen($texto) > 255) {
            return 'El titulo no puede tener más de 255 caracteres';
        }
    }
}