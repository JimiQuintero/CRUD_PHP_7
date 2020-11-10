<?php
include("conexion.php");

$solicitud = "CREATE TABLE datos (ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY (ID), Nombre varchar(15),Apellido varchar(15), Edad int(3), Celular int(15), Email varchar(15))";

$resultado = mysqli_query($conexion, $solicitud) or die ("No se puede establecer la conexion a la Base de Datos");




?>