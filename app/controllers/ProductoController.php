<?php

namespace Anahi\TukiTienda\Controllers;

use Anahi\TukiTienda\Models\Categoria;
use Anahi\TukiTienda\Models\Producto;

class ProductoController
{
    public function index(): void
    {
        $categoria = new Categoria(1, 'Soportes');

        $productos = [
            new Producto(
                1,
                'Soporte para celular',
                'Soporte de celular impreso en 3D',
                'soporte-celular.jpg',
                8500,
                10,
                'Negro',
                $categoria
            ),
            new Producto(
                2,
                'Soporte para notebook',
                'Soporte para notebook impreso en 3D',
                'soporte-notebook.jpg',
                12000,
                5,
                'Blanco',
                $categoria
            )
        ];

        require __DIR__ . '/../views/productos/index.php';
    }
}