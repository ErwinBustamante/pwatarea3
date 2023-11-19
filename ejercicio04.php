<?php
session_start();

function generarNumeroAleatorio() {
    return rand(1, 10);
}

if (!isset($_SESSION['numeroAleatorio'])) {
    $_SESSION['numeroAleatorio'] = generarNumeroAleatorio();
} else {
    if (isset($_POST['intentar'])) {
        $intentar = $_POST['intentar'];
        if ($intentar == $_SESSION['numeroAleatorio']) {
            $mensaje = "¡Correcto! Has adivinado el número.";
            $_SESSION['numeroAleatorio'] = generarNumeroAleatorio();
        } else {
            $mensaje = "Incorrecto. Inténtalo de nuevo.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanzas</title>
</head>
<body>

    <h1>Juego de Adivinanzas</h1>
    
    <?php
    if (isset($mensaje)) {
        echo "<p>$mensaje</p>";
    }
    ?>

    <form method="post">
        <label for="intentar">Intenta adivinar el número (entre 1 y 10):</label>
        <input type="number" id="intentar" name="intentar" min="1" max="10" required>
        <button type="submit">Intentar</button>
    </form>

    <script src="script.js"></script>

</body>
</html>
