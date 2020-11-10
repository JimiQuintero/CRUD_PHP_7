<?php
include("conexion.php");

$id = $_GET['id'];
$solicitud= "SELECT * FROM datos WHERE ID=$id";
$respuesta= mysqli_query($conexion, $solicitud) or die ("No se pudo estrablecer conexion con la Base de Datos");
?>
<form action="uno.php" method="post">
    <?php
        while ($fila = mysqli_fetch_array($respuesta)) {
            echo "Nombre: <input type= 'text' name= 'nombre' value= ' ".$fila['Nombre']."'><br> "; 
            echo "Apellido: <input type= 'text' name= 'apellido' value= ' ".$fila['Apellido']."'><br> "; 
            echo "Edad: <input type= 'text' name= 'edad' value= ' ".$fila['Edad']."'><br> ";
            echo "Celular: <input type= 'text' name= 'celular' value= ' ".$fila['Celular']."'><br> ";
            echo "Email: <input type= 'text' name= 'email' value= ' ".$fila['Email']."'><br> ";
            echo "<input type= 'hidden' name= 'id' value= ' ".$id."'>";
        }
    ?> 
        <input type="submit" nane= "ENVIAR" value= "CAMBIAR">  

</form>




