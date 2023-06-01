<?php 
    session_start();

    $_SESSION["nombre"] = "Emmanuel";
    $_SESSION["boleta"] = "2020630138";
    $boleta = $_SESSION["boleta"];
    $nombre = $_SESSION["nombre"];
    echo "<p style='color: blue; font-size: 35;'>Tu nombre es: $nombre </p>";
    echo "<p style='color: blue; font-size: 35;'>Tu boleta es: $boleta </p>";
    //echo "<p style='color: blue; font-size: 35;'>Hola $nombre tú boleta es : $boleta </p>";

    echo "<a href='sesionDos.php'>Ir a sesion dos</a>";


    

?>