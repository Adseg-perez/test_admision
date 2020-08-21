# PRUEBA DE ADMISION

Sistema base desarrollado en Back-End con Laravel y Front-End en Angular 10.0.6


# Descripción

Este sistema, describe el uso y puesta a punto de una **Api Rest** usando [**Laravel**](https://laravel.com/) y recibe y envía datos desde  [**Angular**](https://angular.io/) con [**NodeJS**](https://nodejs.org/en/) 

<img src="https://laravel.com/img/logotype.min.svg" alt="laravel" style="zoom:150%;" />

<img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/21_Angular_logo_logos-512.png" alt="angular" style="zoom:33%;" />

<img src="https://nodejs.org/static/images/logo.svg" alt="NodeJS" style="zoom:50%;" />

## Construido con 🛠️

- [Bootstrap](https://getbootstrap.com/)
- [Angular](https://angular.io/)
- [Laravel](https://laravel.com/)

# Documentacion

## Requisitos

-  [**Laravel**](https://laravel.com/)
-  [**Node**](https://nodejs.org/en/)
-  [**Angular**](https://angular.io/)
-  [**MySQL**](https://www.mysql.com/)


## Instalación de este repositorio

Clonar este repositorio y alojarlo en una carpeta conveniente.

    git clone https://github.com/Adseg-perez/test_admision

## Activar Composer

(Sólo si es necesario)

```sh
$ composer update
$ php artisan key:generate 
```


## Crear Base de Datos en MySQL

Una vez hayamos generado la llave debemos crear la base de datos

```sh
CREATE DATABASE bd_test_admision;
```

## En el Archivo .env

Cambiar las credenciales de MySQL

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bd_test_admision
DB_USERNAME=root
DB_PASSWORD=
```

## Migrar las tablas y seeders

Una vez hayamos generado la llave debemos crear la base de datos

```sh
$ php artisan migrate --seed
```

## Iniciamos el Servidor

Ahora activamos el servidor para activar nuestra Api Rest, por defecto toma 127.0.0.1:8000

```sh
$ php artisan serve
```

## Para obtener Productos se ingresa a la url:

```sh
127.0.0.1:8000/api/producto
```



# Iniciamos Angular

Lo primero será

```
Instalar NodeJs desde [NodeJs Official Page](https://nodejs.org/en).
```


Luego nos ubicamos en la carpeta del proyecto y abrimos la consola

```.flaskenv
Ejecutar en la consola los siguientes comandos: 
    - ```npm install -g @angular/cli```
    - ```npm install```
```


# Iniciando el servidor

A continuación se describen algunas configuraciones para iniciar el servidor web.


## Usamos ng serve

```sh
$ ng serve
```

## Navegamos a la url

```sh
[http://localhost:4200/](http://localhost:4200/)
```
