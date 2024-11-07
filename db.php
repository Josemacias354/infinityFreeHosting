<?php

// Datos de conexión
$db_host = "sql108.infinityfree.com";
$db_user = "if0_37620354";
$db_passw = "uctHkzdfb4E88m";
$db_name = "if0_37620354_pruebaacceso";


    $conexion = new mysqli($GLOBALS['db_host'], $GLOBALS['db_user'], $GLOBALS['db_passw'], $GLOBALS['db_name']);
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    echo "Conexión exitosa";





