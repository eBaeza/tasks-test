## Setup

##### Requerimientos e instalación
- [Requerimientos](https://laravel.com/docs/5.3#installation) de Laravel 5.3
- [Composer](https://getcomposer.org/)
- Clonar este repositorio
- `$ cd tasks-test`
- `$ composer install`

##### Crear achivo de configuración y generar clave de la aplicación
- `$ cp .env.example .env`
- `$ php artisan  key:generate`
- Define los accesos de tu base de datos en el archivo creado.

##### Correr migraciones y generar datos de prueba
- `$ php artisan migrate --seed`

##### Inicializar servidor de desarrollo
 - `$ php artisan serve`

## Tasks Test RESTful

En el sistema de gestión de tareas se necesitan crear tareas para un tipo de recurso y asignarla a un equipo de trabajo.

- Desarrolla un endpoint que permita crear una nueva tarea dedicada para un tipo de recurso y asignarle un equipo de trabajo.
- Desarrolla el endpoint para listar las tarea creadas.
- Crea un rama con tu primer nombre y apellido y realiza un pull request cuando termines.

Notas: Para llevar un registro de los modelos creados utiliza [migraciones](https://laravel.com/docs/5.3/migrations) para el control de versión de la DB. Para un desarrollo más rápido toma en cuenta los [controladores RESTful](https://laravel.com/docs/5.3/controllers#resource-controllers).

Metadatos de las tareas:

- Identificador único
- Tipo de recurso
- Nombre
- Descripción
- Equipo al que se asigna
- Fecha de entrega
- Estatus (O - Open, P - In Progress, D - Done, E - Expired)
- Fecha de creación
- Fecha de modificación

Endpoints disponibles actualmente:
```
GET /api/resourcetype
GET /api/resourcetype/{id}
GET /api/team
GET /api/team/{id}
```
