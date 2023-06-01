<?php
    $nombre = $_POST["name"];
    $apellido_paterno = $_POST["Lname"];
    $apellido_materno = $_POST["Mname"];
    $contrasena = $_POST["pass"];
    $boleta = $_POST["boleta"];
    $correo = $_POST["mail"];

    echo "<h1 style='text-align: center;font-size: 50'>Tu información:</h1>";
    echo "<p style='color: blue; font-size: 35;'>Nombre: $nombre</p>";
    echo "<p style='color: blue; font-size: 35;'>Apellido Paterno: $apellido_paterno</p>";
    echo "<p style='color: blue; font-size: 35;'>Apellido Materno: $apellido_materno</p>";
    echo "<p style='color: blue; font-size: 35;'>Contraseña: $contrasena</p>";
    echo "<p style='color: blue; font-size: 35;'>Boleta: $boleta</p>";
    echo "<p style='color: blue; font-size: 35;'>Correo: $correo </p>";

    $conexion = mysqli_connect("localhost", "root", "", "db_4cm4");

    $sql = "SELECT * FROM alumnos";

    $resultado = mysqli_query($conexion, $sql);

    $numfilas = mysqli_num_rows($resultado);

    echo "Tenemos $numfilas registro(s) en la tabla alumnos de nuestra base de datos";

?>