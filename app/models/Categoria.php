<?php

namespace Anahi\TukiTienda\Models;

class Categoria
{
    private int $id;
    private string $nombre;
    private array $productos;

    public function __construct(int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->productos = [];
    }

    public function agregarProducto(Producto $producto): void
    {
        $this->productos[] = $producto;
    }

}
