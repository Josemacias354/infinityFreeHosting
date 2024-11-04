<?php
function obtenerNavegador() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($userAgent, 'Firefox') !== false) {
        return "Mozilla Firefox";
    } elseif (strpos($userAgent, 'Chrome') !== false && strpos($userAgent, 'Edge') === false) {
        return "Google Chrome";
    } elseif (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) {
        return "Safari";
    } elseif (strpos($userAgent, 'Edg') !== false) {
        return "Microsoft Edge";
    } elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
        return "Opera";
    } elseif (strpos($userAgent, 'Trident') !== false || strpos($userAgent, 'MSIE') !== false) {
        return "Internet Explorer";
    } else {
        return "Navegador desconocido";
    }
}

// Imprimir el nombre del navegador
echo "Estás usando: " . obtenerNavegador();
?>