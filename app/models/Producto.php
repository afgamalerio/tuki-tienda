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

    public function __construct(
        int $id,
        string $nombre,
        string $descripcion,
        string $foto,
        float $precio,
        int $stock,
        string $color,
        Categoria $categoria
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->foto = $foto;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->color = $color;
        $this->categoria = $categoria;
    }

    public function tieneStock(): bool
    {
        return $this->stock > 0;
    }

    public function reducirStock(int $cantidad): int
    {
        // Si la cantidad solicitada es menor o igual a cero, no se realiza ninguna acción y se devuelve cero.
        if ($cantidad <= 0) {
            return 0;
        }
        // Si hay stock suficiente, se descuenta la cantidad solicitada.
        if ($cantidad <= $this->stock) {
            $this->stock -= $cantidad;
            return $cantidad;
        }
        // Si no hay suficiente stock, se descuenta todo el stock disponible.
        $cantidadDisponible = $this->stock;
        $this->stock = 0;
        // Devuelve la cantidad que se pudo descontar del stock,
        // es decir, la cantidad disponible para agregar al carrito.
        return $cantidadDisponible;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
