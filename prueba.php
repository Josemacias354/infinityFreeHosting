<?php
include 'db.php';
global $conexion;
// Ejecutar consulta SELECT
$sql = "SELECT * FROM empleados";

$resultado = mysqli_query($conexion, $sql);
if (mysqli_errno($conexion)!=0) {
    die("Error: " . mysqli_error($conexion));
}
else {
    echo "Consulta exitosa";
}
