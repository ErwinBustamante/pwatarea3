<?php

session_start();


if (!isset($_SESSION['visitas'])) {
    
    $_SESSION['visitas'] = 1;
} else {
    
    $_SESSION['visitas']++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>

    <h1>Bienvenido a mi sitio</h1>
    
    <p>Número de visitas: <?php echo $_SESSION['visitas']; ?></p>

</body>
</html>
