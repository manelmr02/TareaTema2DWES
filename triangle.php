<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
    <style>
        /* Establecer la fuente predeterminada como monospace */
        body {
            font-family: monospace;
        }
    </style>
</head>

<body>
    <?php
    require_once 'TriangleGenerator.php';
    echo TriangleGenerator::generateTriangle(6);
    ?>
</body>

</html>