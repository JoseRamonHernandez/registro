<?php require_once "../db/conexion.php" ?>

<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];


$sentencia = pg_query($conexion, "INSERT INTO proovedores(id, nombre, telefono) VALUES ('$id', '$nombre', '$telefono');");

if($sentencia)
{
    header("Location: ../index.html");
}
else
{
    ?>
    <a href="../index.html">error en la conexion a la base de datos</a>
    <?php
}

?>