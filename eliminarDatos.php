<?php
include("conexion.php");

$id = $_GET['id'];

$solicitud = "DELETE FROM datos WHERE ID=$id";
$respuesta = mysqli_query($conexion, $solicitud) or die ("No se pudo estrablecer conexion con la Base de Datos");

header("location:consultarDatos.php");

?>