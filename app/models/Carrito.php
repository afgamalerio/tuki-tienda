<?php

namespace Anahi\TukiTienda\Models;

class Carrito
{
    private int $id;
    private Usuario $usuario;
    private array $productos;
    private float $subtotal;
    private float $costoEnvio;
    private float $total;
}

?>