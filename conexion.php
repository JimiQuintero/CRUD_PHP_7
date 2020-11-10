<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "clientes";

$conexion = mysqli_connect($host, $user, $pass, $db) or die ("Upss!! No se pudo conectar a la Base de Datos");

mysqli_set_charset($conexion, "utf8");

?>