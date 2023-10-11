<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $contrasena = $_POST["contrasena"];

    // Se verifican los datos
  
    if ($nombre == "Christian" && $contrasena == "hola") {
        echo "Mi nombre es: $nombre, tengo $edad años.";
    } else {
        echo "Tus datos no coinciden. ";
        echo "<a href='index.html'>Regresar al formulario</a>";
    }
}
?>
