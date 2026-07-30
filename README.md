# Tuki Estudio - Tienda Online

Tienda online desarrollada como proyecto práctico para el curso **PHP & Laravel | Aceleración Tech La Pampa**.

El proyecto simula una tienda de productos de **Tuki Estudio**, un emprendimiento dedicado a la impresión 3D y personalización de productos.

## Tecnologías utilizadas

* PHP 8.2.12
* XAMPP
* Composer 2.10.2
* Git
* GitHub
* HTML / CSS

## Requisitos

Para ejecutar el proyecto localmente se necesita:

* XAMPP con PHP 8.2 o superior.
* Composer 2.x.
* Git.
* Un navegador web.

## Instalación

### 1. Clonar el repositorio

Clonar el repositorio dentro de la carpeta `htdocs` de XAMPP:

```bash
cd C:\xampp\htdocs
git clone https://github.com/afgamalerio/tuki-tienda
```

### 2. Ingresar al proyecto

```bash
cd tuki-tienda
```

### 3. Instalar dependencias

```bash
composer install
```

### 4. Iniciar XAMPP

Abrir XAMPP e iniciar el servicio **Apache**.

### 5. Abrir el proyecto

Desde el navegador ingresar a:

```text
http://localhost/tuki-tienda/
```

## Estructura del proyecto

```text
tuki-tienda/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── public/
│
├── index.php
│
└── README.md
```

### `app/`

Contiene la lógica principal de la aplicación, organizada siguiendo el patrón MVC.

* `controllers/`: controladores encargados de gestionar las acciones de la aplicación.
* `models/`: modelos que representan los datos y entidades del negocio.
* `views/`: archivos encargados de mostrar la información al usuario.

### `public/`

Contendrá los recursos públicos de la aplicación, como archivos CSS, JavaScript e imágenes.

### `index.php`

Punto de entrada de la aplicación.

## Arquitectura MVC

El proyecto utiliza una arquitectura **Modelo-Vista-Controlador (MVC)** implementada manualmente en PHP.

* **Modelo:** representa las entidades y los datos de la tienda.
* **Vista:** se encarga de mostrar la información en HTML.
* **Controlador:** recibe las acciones del usuario y coordina la comunicación entre los modelos y las vistas.

La arquitectura será desarrollada progresivamente durante el proyecto.

## Dominio de la aplicación

La tienda estará compuesta inicialmente por las siguientes entidades:

* **Producto:** representa los productos disponibles en la tienda.
* **Categoría:** agrupa los productos según su tipo.
* **Usuario:** representa a los clientes de la tienda.
* **Carrito:** contiene los productos seleccionados por el usuario y permite calcular el subtotal, costo de envío y total de la compra.

## Estado del proyecto

Proyecto en desarrollo correspondiente a la **Entrega 1: Fundamentos de PHP y diseño de la aplicación**.

En esta etapa se trabajará con PHP puro, Programación Orientada a Objetos y una arquitectura MVC manual, sin conexión a una base de datos ni utilización de Laravel.
