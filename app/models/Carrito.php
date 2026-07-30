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

    public function __construct(int $id, Usuario $usuario)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->productos = [];
        $this->subtotal = 0.0;
        $this->costoEnvio = 0.0;
        $this->total = 0.0;
    }

    public function calcularCostoEnvio(): void
    {
        $direccion = strtolower($this->usuario->getDireccion());

        if (str_contains($direccion, 'general pico')) {
            $this->costoEnvio = 1500.0;
        } else {
            $this->costoEnvio = 3000.0;
        }

        $this->calcularTotal();
    }

    public function calcularTotal(): void
    {
        $this->total = $this->subtotal + $this->costoEnvio;
    }
    
    public function agregarProducto(Producto $producto, int $cantidad): void
    {
        if ($producto->tieneStock()) {
            $cantidadAgregada = $producto->reducirStock($cantidad);

            if ($cantidadAgregada > 0) {
                $this->productos[] = [
                    'producto' => $producto,
                    'cantidad' => $cantidadAgregada
                ];

                $this->subtotal += $producto->getPrecio() * $cantidadAgregada;
                $this->calcularCostoEnvio();
            }
        }
    }
}
