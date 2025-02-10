<?php
include '../views/cabecera.php';

?>

<h2>Añadir tarea</h2>

<form action="index.php" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" placeholder="Titulo">
    <span class="error"><?php if (isset($errores['titulo'])) echo $errores['titulo']?></span>
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" cols="20" rows="3" placeholder="Descripción"></textarea>
    <input type="submit" value="Añadir tarea" name="add_task">
</form>


<?php

include '../views/pie.php';