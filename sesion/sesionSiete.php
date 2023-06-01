<?php 
    session_start();

   if(isset($_SESSION["boleta"])){
    //la sesion existe si y solo si paso por el login y los datos fueron correctos. 
    $boleta = $_SESSION["boleta"];
    echo "<h1 style='color: red'>Pagina personalizada para el usuario admin o alumno</h1>";
    echo "<a href='cerrarSesion.php?nombreSesion=boleta'>Cerrar Sesion</a>";
   }else{
    header("location:sesionCinco.php");
   }
    

?>