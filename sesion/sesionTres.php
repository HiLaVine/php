<?php 
    session_start();

   $nombre = $_SESSION["nombre"];
   $boleta = $_SESSION["boleta"];
   $institucion = $_SESSION["institucion"];

   echo "<h1 style='color: red'>Hola $nombre</h1> <p style='font-size:35px'>Perteneces al <span style='color:green'>$institucion </span> y tu número de boleta es $boleta</p>";

   //session_destroy(); //destruimos las sesiones. 
   //unset($_SESSION["nombre"]);

   echo "<a href='sesionCuatro.php'>Ir a sesion cuatro</a>";

    

?>