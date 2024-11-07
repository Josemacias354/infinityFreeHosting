<?php
// Esta es la segunda página que comprueba el valor de HTTP_REFERER
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>
<h1>Página 2</h1>
<?php
if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    echo "<p>Has llegado desde: $referer</p>";
} else {
    echo "<p>No se ha podido determinar el referer.</p>";
}
?>
</body>
</html>