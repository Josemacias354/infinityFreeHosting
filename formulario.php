<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nombre'];
    $edat = $_POST['Edad'];
    $dni = $_POST['DNI'];

    echo "<h1>Formulari</h1>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Edat:</strong> $edat</p>";
    echo "<p><strong>DNI:</strong> $dni</p>";
}
