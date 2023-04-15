<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Desarrollo laravel Konecta

Bienvenidos al desarrollo de prueba con php, para poder instalar de manera correcta el proyecto en su pc, tenga en cuenta los siguientes pasos:

1. Bajar proyecto a su carpeta local
2. En la consola de comandos ejecutar el siguiente comando 'composer install'
3. Crear archivo .env y pegar codigo que aparece en .env.example
4. Configurar base de datos, verificar que este la base de datos creada
5. Ejecutar 'php artisan migrate'
6. Ejecutar 'php artisan serve'
7. En su navegador ingresar 'http://127.0.0.1:8000'
Listo

Tener en cuenta version de laravel 10.

Consultas SQL 
1. SELECT p.producto_nombre AS producto, SUM(v.venta_cantidad) AS total_vendido 
FROM productos p 
JOIN ventas v ON p.id = v.id_producto 
GROUP BY p.id 
ORDER BY total_vendido DESC 
LIMIT 1;

2. SELECT productos.producto_nombre, productos.producto_stock 
FROM productos 
ORDER BY productos.producto_stock DESC 
LIMIT 1;




