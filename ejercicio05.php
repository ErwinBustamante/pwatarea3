<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Galería de Imágenes</title>
</head>
<body>

    <h1>Galería de Imágenes</h1>
    
    <table class="gallery">
        <?php
        
        $directorio = 'img';

        $imagenes = glob($directorio . '/*.jpg');

        
        $imagenes = array_slice($imagenes, 0, 10);

        
        $contador = 0;

        
        foreach ($imagenes as $imagen) {
            
            if ($contador % 2 == 0) {
                echo "<tr>";
            }

            echo "<td><img src='$imagen' alt='Imagen'></td>";

            if ($contador % 2 == 1) {
                echo "</tr>";
            }

           
            $contador++;
        }
        ?>
    </table>

</body>
</html>

