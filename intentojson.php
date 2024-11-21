<?php
$data=$_POST['dades'];

echo json_encode($data);

echo "<h1>Formulari</h1>";
$nom = $data['nom'];
echo "<p><strong>Nom:</strong> $nom</p>";
$edat = $data['edat'];
echo "<p><strong>Edat:</strong> $edat</p>";
$dni = $data['dni'];
echo "<p><strong>DNI:</strong> $dni</p>";