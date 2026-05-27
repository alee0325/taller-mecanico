<?php
session_start();
include("config/conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM empleados WHERE usuario='$usuario' AND contrasena='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
} else {
    echo "Datos incorrectos";
}
?>