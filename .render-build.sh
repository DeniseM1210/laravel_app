#!/usr/bin/env bash

# Instala dependencias PHP
composer install --no-dev --optimize-autoloader

# Crea enlace de almacenamiento
php artisan storage:link

# Genera la clave de app
php artisan key:generate

# Ejecuta migraciones (solo si ya configuraste la DB)
php artisan migrate --force
