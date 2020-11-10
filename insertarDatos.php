<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$solicitud= "INSERT INTO datos (Nombre, Apellido, Edad, Celular, Email) VALUES ('$nombre', '$apellido', '$edad', '$celular', '$email') ";

$respuesta = mysqli_query($conexion, $solicitud) or die ("No se establecio conexion con la Base de Datos");

header('location: index.php');


?>