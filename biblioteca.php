<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>

<body>
    <?php
    $libros = [  
        "libro1" => [  
            "titulo" => "PHP para Principiantes",  
            "autor" => "Carlos Ruiz",  
            "precio" => 19.99,  
            "categoria" => "Desarrollo web"  
        ],  
        "libro2" => [  
            "titulo" => "JavaScript Avanzado",  
            "autor" => "Laura García",  
            "precio" => 25.99,  
            "categoria" => "Desarrollo web"  
        ],  
        "libro3" => [  
            "titulo" => "Algoritmos en Python",  
            "autor" => "Miguel Fernández",  
            "precio" => 29.99,  
            "categoria" => "Algoritmos"  
        ]  
    ];
    ?>
    <h2>Información de todos los libros</h2>
    <table style="border-collapse: collapse; border: 1px solid black;">
        <tr>
            <th style="border-collapse: collapse; border: 1px solid black; padding: 8px;">Título</th>
            <th style="border-collapse: collapse; border: 1px solid black; padding: 8px;">Autor</th>
            <th style="border-collapse: collapse; border: 1px solid black; padding: 8px;">Precio</th>
            <th style="border-collapse: collapse; border: 1px solid black; padding: 8px;">Categoría</th>
        </tr>
        <?php foreach ($libros as $libro){
            echo "<tr>
                    <td style='border-collapse: collapse; border: 1px solid black; padding: 8px;'>".$libro['titulo']."</td>
                    <td style='border-collapse: collapse; border: 1px solid black; padding: 8px;'>".$libro['autor']."</td>
                    <td style='border-collapse: collapse; border: 1px solid black; padding: 8px;'>".$libro['precio']."€</td>
                    <td style='border-collapse: collapse; border: 1px solid black; padding: 8px;'>".$libro['categoria']."</td>
                </tr>";
        } 

        ?>
        
    </table>

    <h2>Libros de la categoría 'Desarrollo Web'</h2>
        <?php
         $librosFiltrados = array_filter($libros, function ($libro) {
            return $libro['categoria']=="Desarrollo web";
        });?>
        <ol>
        <?php foreach ($librosFiltrados as $libro) : ?>
                    <li>
                        <?= $libro['titulo'] ?>
                    </li>
                <?php endforeach; ?>
        </ol>


</body>

</html>