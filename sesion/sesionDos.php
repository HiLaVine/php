<?php 
    session_start();

   $nombre = $_SESSION["nombre"];

   echo "<h1 style='color: red'>Hola <span style='color:green'>$nombre </span></h1>";

   $_SESSION["institucion"] = "IPN";

   echo "<a href='sesionTres.php'>Ir a sesion tres</a>";

    

?>