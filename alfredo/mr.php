<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $contrasena = $_POST["contrasena"];

    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido paterno: " . $apellido_paterno . "<br>";
    echo "Apellido materno: " . $apellido_materno . "<br>";
    echo "Contraseña: " . $contrasena;
}
?>