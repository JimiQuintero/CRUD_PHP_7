<?php include("includes/header.php"); ?>

    <div class="container">
        <form action="insertarDatos.php" method="post">
        Nombre: <input class="form-control" type="text" name="nombre"><br>
        Apellido: <input type="text" name="apellido"><br>
        Edad: <input type="text" name="edad"><br>
        Celular: <input type="text" name="celular"><br>
        Email: <input type="email" name="email" id=""><br>
        <input type="submit" value="Enviar">
        <button><a href="consultarDatos.php">Consultar</a></button> 
        </form>    
    </div>
    

    <?php  include("includes/footer.php"); ?>
