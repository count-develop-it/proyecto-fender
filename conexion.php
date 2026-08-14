<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tienda_fender";

$conexion = @new mysqli($host, $user, $password, $database);

if ($conexion->connect_error) {
    echo "<div style='padding: 20px; font-family: sans-serif; text-align: center;'>";
    echo "<h2> Base de datos no conectada en el servidor remoto</h2>";
    echo "<p>El sitio está corriendo en Render. La base de datos local <code>tienda_fender.sql</code> está disponible en el repositorio de GitHub.</p>";
    echo "</div>";
}
?>
