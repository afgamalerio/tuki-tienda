<?php

namespace Anahi\TukiTienda\Models;

class Usuario
{
    private int $id;
    private string $nombre;
    private string $email;
    private string $password;
    private string $direccion;
    private array $compras;

    public function __construct(
        int $id,
        string $nombre,
        string $email,
        string $password,
        string $direccion
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->direccion = $direccion;
        $this->compras = [];
    }

    public function verificarPassword(string $password): bool
    {
        return password_verify($password, $this->password);
    }

    public function agregarCompra(array $compra): void
    {
        $this->compras[] = $compra;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }
}
