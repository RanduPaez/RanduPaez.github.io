<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "dbclientes";
$conexion = mysqli_connect($server,$user,$pass,$db);
if (!$conexion) {
    echo 'No se pudo conectar a la base de datos';
    exit;
} else {
    echo 'Conexión exitosa';
}