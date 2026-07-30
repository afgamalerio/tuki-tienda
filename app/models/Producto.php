<?php

namespace Anahi\TukiTienda\Models;

class Producto
{
    private int $id;
    private string $nombre;
    private string $descripcion;
    private string $foto;
    private float $precio;
    private int $stock;
    private string $color;
    private Categoria $categoria;
}

?>