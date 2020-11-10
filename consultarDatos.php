<?php
include("conexion.php");

$solicitud = "SELECT * FROM datos";
$respuesta = mysqli_query($conexion, $solicitud) or die ("No se pudo estrablecer conexion con la Base de Datos");

echo"<table border='1'>
    <tr>
        <td>Nombre y Apellido</td><td>Edad</td><td>Celular</td><td>Email</td><td colspan=3>Accion</td>  
    </tr>";

    while ($fila = mysqli_fetch_array($respuesta)) {
        echo "<tr>";
        echo "<td>".$fila['Nombre']." ".$fila['Apellido']."</td>";
        echo "<td>".$fila['Edad']."</td>";
        echo "<td>".$fila['Celular']."</td>";
        echo "<td>".$fila['Email']."</td>";
        echo "<td><a href= 'index.php'>Ingresar</a></td>";
        echo "<td><a href='eliminarDatos.php?id= ".$fila['ID']."'>Eliminar</a></td>";
        echo "<td><a href='modificarDatos.php?id= ".$fila['ID']."'>Modificar</a></td>";

    
    }
    
echo "</table>";



?>