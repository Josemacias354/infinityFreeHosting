<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $edat = $_POST['edat'];
    $dni = $_POST['dni'];

    echo "<h1>Formulari</h1>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Edat:</strong> $edat</p>";
    echo "<p><strong>DNI:</strong> $dni</p>";




    echo "<h1>Formulari</h1>";
    echo "<p>$nom</p>";
    echo "<p>$edat</p>";
    echo "<p>$dni</p>";

    if (empty($nom) || empty($edat) || empty($dni)) {
        echo "<p style='color: red;'>Has d'omplir tots els camps</p>";
    }
    else {
        echo "<p style='color: green;'>Formulari enviat correctament</p>";
    }
}
?>