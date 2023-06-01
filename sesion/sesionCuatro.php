<?php 
    session_start();

   $nombre = $_SESSION["nombre"];
   $boleta = $_SESSION["boleta"];
   

   echo "<h1 style='color: yellow'>Tu numero de empleado es: <span style='color: #010659'>$boleta</span></h1>";

   //session_destroy(); //destruimos las sesiones. 
   //unset($_SESSION["nombre"]);

   echo "<a href='sesionUno.php'>Ir a sesion uno</a>";

    

?>