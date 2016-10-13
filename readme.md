#### Instalar dependencias con composer
- `$ cd tasks-test`
- `$ composer install`
-
#### Crear achivo de configuración y generar clave de la aplicación
- `$ cp .env.example .env`
- `$ php artisan  key:generate`
- Definir los accesos de tu base de datos en el archivo creado.

#### Correr migraciones y generar datos de prueba
- `$ php artisan migrate --seed`

#### Inicializar servidor de desarrollo
 - `$ php artisan serve`
