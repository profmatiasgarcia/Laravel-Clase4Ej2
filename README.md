# Laravel-Clase4Ej2
## Ejemplo 2 del Tutorial de Laravel Framework Clase 4

  * Utilización de UI build-in auth system
  * Ejemplo aplicación con autenticación
  * Ejemplo CRUD con imagenes

## Como instalar y utilizar este ejemplo

1. Instalar paquetes o dependencias, desde la terminal de VS Code o del OS estando en la carpeta del proyecto tipear
```bash
composer install
``` 
```bash
composer update
```
```bash
composer fund
 ```

2. Realizar una copia del archivo .env.example
```bash
cp .env.example .env
```

3. Generar APP_KEY que es una cadena de caracteres generada aleatoriamente por Laravel que utiliza para todas las cookies cifradas, como las cookies de sesión. Para generar la APP_KEY del proyecto ejecutar el siguiente comando
```bash
php artisan key:generate
```

4. Deberá crear en su motor de base de datos la BD llamada **crud_empleados** y ejecutar el servicio.

5. Para crear la tabla de migraciones en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto
```bash
php artisan migrate:install
```

6. Para lanzar las migraciones de este ejemplo e impacten en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto
```bash
php artisan migrate
```

7. Crear un enlace simbólico que permite acceder desde la carpeta public, a la carpeta storage para registrar las imagenes.
```bash
php artisan storage:link
```

## Apunte Tutorial de Laravel Framework Clase 4
[Laravel-Clase4](https://www.profmatiasgarcia.com.ar/uploads/tutoriales/Laravel-Clase4.pdf)

## Licencia
[GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html)
