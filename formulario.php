<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nom = $_GET['nombre'];
    $edat = $_GET['Edad'];
    $dni = $_GET['DNI'];

    echo "<h1>Formulari</h1>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Edat:</strong> $edat</p>";
    echo "<p><strong>DNI:</strong> $dni</p>";
}
