<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$query = "UPDATE datos SET Nombre='$nombre', Apellido='$apellido', Edad='$edad', Celular='$celular', Email='$email' WHERE ID=$id ";

$respuesta= mysqli_query($conexion, $query);
header("location: consultarDatos.php");
?>