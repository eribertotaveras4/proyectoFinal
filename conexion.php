<?php
$servername = "localhost";
$username = "root";
$password = ""; // tu contraseña de MySQL, si tienes una
$dbname = "login_php";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión a la base de datos login_php exitosa";
?>
