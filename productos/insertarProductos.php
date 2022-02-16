<?php require_once "../db/conexion.php" ?>

<?php

$codigo_barras = $_POST["codigo_barras"];
$nombre_producto = $_POST["nombre_producto"];
$precio_producto = $_POST["precio_producto"];
$stock = $_POST["stock"];
$id_proveedor = $_POST["id_proveedor"];


$sentencia = pg_query($conexion, "INSERT INTO productos(codigo_barras, nombre_producto, precio_producto, stock, id_proveedor) VALUES ('$codigo_barras', '$nombre_producto', '$precio_producto', '$stock', '$id_proveedor');");

if($sentencia)
{
    header("Location: ../index.html?exito");
}
else
{
    ?>
    <a href="./index.html">error en la conexion a la base de datos</a>
    <?php
}

?>