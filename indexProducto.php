<?php
    require_once('model/productos.php');
    //creamos el array de objetos
    $productos = array(
        new Productos("Televisor", 200, true, 12),
        new Productos("Celular", 400, true, 5),
        new Productos("Monitor Curvo", 400, true, 2),
    );
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa POO</title>
</head>
<body> 
    <header></header>
    <h1>Uso Programacion orientada a objetos POO en PHP</h1>
    <nav></nav>
    <main>
        <table border>
            <head>
                <tr>
                    <th>Nombre</th>
                    <th>Presio</th>
                    <th>disponible</th>
                    <th>cantidad</th>
                </tr>
            </head>
            <tbody> 
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?= $producto -> getNombre();?></td>
                        <td><?= $producto -> getPrecio();?></td>
                        <td><?= $producto -> getDisponible() ? 'Disponible' : 'No Disponible';?></td>
                        <td><?= $producto -> getCantidad();?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <footer></footer>

</body>
</html>