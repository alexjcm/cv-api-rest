<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Módulo de Clínica Veterinaria (Api RestFul con Laravel 5.8)

## Pre-requisitos

Utilizaremos el entorno de desarrollo [Laragon](https://laragon.org/download/) para nuestro proyecto, si utiliza otro deberá asegurarse que el servidor cumpla con los siguientes requisitos:

-   PHP >= 7.1.3
-   MySql >= 5.7
-   Composer

## Instalación del proyecto

**1.** Copiamos o clonamos el proyecto en la ruta C:/Laragon/www/

**2.** Ingresamos con la terminal de Laragon a la carpeta de dicho proyecto, luego ejecutamos el comando: `composer install`
Automáticamente composer leerá el archivo **composer.json** que está en el proyecto y comenzará a instalar todas las dependencias.

**3.** Creamos una nueva BD para el proyecto, para ello damos clic en el botón **Base de datos** de la interfaz de Laragon, luego seleccionamos Laragon y damos clic en **Abrir**, en la nueva interfaz que se abre damos clic derecho en Laragon y seleccionamos **Crear nuevo** - **Base de datos**:

**4.** Editamos el archivo **.env** agregando en la sección de MySQL nuestro user, pass y nombre de la BD (estas credenciales se encuentran al dar clic en Base de datos en Laragon).

**5.** Laravel necesita una clave única para nuestros proyectos. La generamos usando el comando: `php artisan key:generate`

**6.** Ejecutamos: `php artisan migrate` para crear automáticamente las tablas que requiera el proyecto en nuestra BD. Listo, con esto deberíamos poder correr nuestra app sin problemas utilizando el comando **php artisan serve** para iniciar el servidor y poder visualizar la página web del proyecto.

## Licencia

El framework Laravel es un software de código abierto bajo licencia [MIT license](https://opensource.org/licenses/MIT).
