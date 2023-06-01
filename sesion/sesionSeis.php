<?php 
    session_start();

    $resultado = 1; //probamos con 0 y con 1
    if($resultado ==1){
        //solo cuando los datos de sesion son correctos genero esa sesion. 
        $_SESSION["boleta"] = "2020630138";
        header("location:sesionSiete.php");
    }else 
        header("location:sesionCinco.php");

    

?>