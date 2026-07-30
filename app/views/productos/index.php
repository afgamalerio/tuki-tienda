<?php /** @var array $productos */ ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Tuki</title>
</head>

<body>

    <h1>Tienda Tuki</h1>

    <p>Explora nuestros productos.</p>

    <?php foreach ($productos as $producto): ?>

        <div>
            <h2><?= $producto->getNombre() ?></h2>

            <p><?= $producto->getDescripcion() ?></p>

            <p>Precio: $<?= $producto->getPrecio() ?></p>

            <p>Color: <?= $producto->getColor() ?></p>

            <p>Stock disponible: <?= $producto->getStock() ?></p>
    </div>

    <?php endforeach; ?>

</body>

</html>