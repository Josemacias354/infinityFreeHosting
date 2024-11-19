<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nombre'];
    $edat = $_POST['edad'];
    $dni = $_POST['dni'];

    if (is_numeric($nom) || is_numeric($dni)) {
        echo "<p>El nom i el DNI no poden ser nombres</p>";
    }

    echo "<h1>Formulari</h1>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Edat:</strong> $edat</p>";
    echo "<p><strong>DNI:</strong> $dni</p>";
}
?>