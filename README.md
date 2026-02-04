# Aplicación CRUD con Laravel - Sistema de Gestión de Gimnasio - Maquinistas

## Finalidad de la aplicación
 
La aplicación implementa un sistema completo de gestión para un gimnasio que permite **crear, listar, editar y eliminar** diversas entidades de forma sencilla mediante una interfaz web intuitiva. El sistema gestiona clientes, planes de suscripción, sedes, entrenadores, entrenamientos y reservas, con todas sus relaciones correspondientes.


**Comandos Artisan utilizados**

Hemos usado comandos básicos para crear modelos y hacer migraciones sobre bbdd.

**Crear los modelos y las migraciones para las tablas**

 make art cmd="make:model Client -m"
 make art cmd="make:model Sede -m"
 make art cmd="make:model Plan -m"
 make art cmd="make:model Entrenador -m"
 make art cmd="make:model Entrenamiento -m"
 make art cmd="make:model Reserva -m"

**Ejecutar las migraciones para crear las tablas en la base de datos**

  Usamos el comando make art cmd="migrate"

**Organización del proyecto**

El proyecto está organizado siguiendo el patrón MVC (Modelo-Vista-Controlador) con las siguientes entidades principales:

## Modelos y sus relaciones

### Modelo (Client.php)

El modelo `Client` se encuentra en `app/Models/Client.php` y representa la entidad Cliente en la base de datos.

Aquí se define el array `$fillable` con los campos rellenables:

(nombre, email, edad, altura, peso, objetivo, password)

**Relaciones:**
- `belongsToMany(Plan::class)` - Un cliente puede tener múltiples planes y un plan puede tener múltiples clientes (relación muchos a muchos a través de la tabla pivot `client_plan`).
- `hasMany(Reserva::class)` - Un cliente puede tener múltiples reservas.

### Modelo (Sede.php)

El modelo `Sede` se encuentra en `app/Models/Sede.php` y representa las sedes o sucursales del gimnasio.

Campos rellenables: direccion, telefono, ciudad, horario_apertura, horario_cierre.

**Relaciones:**
- `hasMany(Entrenador::class)` - Una sede puede tener múltiples entrenadores.

### Modelo (Plan.php)

El modelo `Plan` se encuentra en `app/Models/Plan.php` y representa los planes de suscripción disponibles.

Campos rellenables: nombre, descripcion, precio.

**Relaciones:**
- `belongsToMany(Client::class)` - Un plan puede ser contratado por múltiples clientes (relación muchos a muchos).

### Modelo (Entrenador.php)

El modelo `Entrenador` se encuentra en `app/Models/Entrenador.php` y representa a los entrenadores del gimnasio.

Campos rellenables: nombre, email, telefono, direccion, especialidad, password, sede_id.

**Relaciones:**
- `belongsTo(Sede::class)` - Un entrenador pertenece a una sede específica.
- `hasMany(Entrenamiento::class)` - Un entrenador puede impartir múltiples entrenamientos.

### Modelo (Entrenamiento.php)

El modelo `Entrenamiento` se encuentra en `app/Models/Entrenamiento.php` y representa las sesiones de entrenamiento disponibles.

Campos rellenables: nombre, descripcion, capacidad, fecha_inicio, fecha_fin, entrenador_id.

**Relaciones:**
- `belongsTo(Entrenador::class)` - Un entrenamiento es impartido por un entrenador.
- `hasMany(Reserva::class)` - Un entrenamiento puede tener múltiples reservas.

### Modelo (Reserva.php)

El modelo `Reserva` se encuentra en `app/Models/reserva.php` y representa las reservas de los clientes para los entrenamientos.

Campos rellenables: client_id, entrenamiento_id, estado, fecha_reserva.

**Relaciones:**
- `belongsTo(Client::class)` - Una reserva pertenece a un cliente.
- `belongsTo(Entrenamiento::class)` - Una reserva pertenece a un entrenamiento específico.


## Controladores

Los controladores están ubicados en `app/Http/Controllers/` y gestionan toda la lógica del CRUD para cada entidad del sistema. Todos los controladores (ClientController, SedeController, PlanController, EntrenadorController, EntrenamientoController y ReservaController) siguen la misma estructura y patrón de implementación.

### Métodos implementados en todos los controladores

**`index()`**: Obtiene todos los registros de la entidad mediante `Entidad::all()` y los envía a la vista `index.blade.php` para mostrarlos en una tabla.

**`create()`**: Muestra el formulario para crear un nuevo registro cargando la vista `create.blade.php`. En controladores con relaciones (como EntrenadorController, EntrenamientoController y ReservaController), también se obtienen las entidades relacionadas necesarias para los selectores del formulario mediante `Entidad::all()`.

**`store()`**: Valida los datos del formulario mediante `$request->validate()` con reglas específicas para cada entidad y crea un nuevo registro en la base de datos. Las contraseñas se encriptan con `bcrypt()` antes de guardarlas (en clientes y entrenadores). Finalmente redirige al listado con un mensaje de confirmación.

**`edit($id o Entidad $entidad)`**: Busca el registro por su ID mediante `findOrFail()` o utiliza route model binding para inyectar la entidad directamente. Carga la vista `update.blade.php` con los datos actuales del registro. En controladores con relaciones, también obtiene las entidades relacionadas para los selectores.

**`update($id o Request $request, Entidad $entidad)`**: Valida los datos del formulario de edición y actualiza el registro en la base de datos. Las contraseñas solo se actualizan si se proporciona una nueva. Para campos únicos como emails, se excluye el ID actual de la validación de unicidad. Redirige al listado después de actualizar.

**`destroy($id o Entidad $entidad)`**: Elimina el registro de la base de datos mediante `delete()` y redirige al listado con un mensaje de confirmación.

### Particularidades específicas por controlador

**ClientController y EntrenadorController:** Implementan encriptación de contraseñas con `bcrypt()` y permiten contraseñas opcionales en la edición.

**SedeController:** Valida que la hora de cierre sea posterior a la hora de apertura, y que la ciudad sea Tarragona o Barcelona.

**EntrenadorController:** Valida especialidades predefinidas (Musculación, CrossFit, Funcional, Yoga, Rehabilitación) y la existencia de la sede asignada.

**EntrenamientoController:** Valida que la capacidad esté entre 1 y 30 personas, que la fecha de fin sea posterior a la fecha de inicio, y la existencia del entrenador asignado.

**ReservaController:** Valida la existencia del cliente y entrenamiento seleccionados. Los métodos `edit()`, `update()` y `destroy()` están pendientes de implementación completa.


### **Rutas (web.php)**
En el archivo `routes/web.php` se han definido las rutas de recursos que generan automáticamente todas las rutas necesarias para el CRUD de cada entidad:

```php
Route::get('/', fn() => view('homepage.index'));

Route::resource('clients', ClientController::class);
Route::resource('sedes', SedeController::class);
Route::resource('plans', PlanController::class);
Route::resource('entrenadors', EntrenadorController::class);
Route::resource('entrenamientos', EntrenamientoController::class);
Route::resource('reservas', ReservaController::class);
```

Cada `Route::resource` crea las siguientes rutas automáticamente:
- `GET /{recurso}` → index (listar)
- `GET /{recurso}/create` → create (formulario crear)
- `POST /{recurso}` → store (guardar)
- `GET /{recurso}/{id}/edit` → edit (formulario editar)
- `PUT /{recurso}/{id}` → update (actualizar)
- `DELETE /{recurso}/{id}` → destroy (eliminar)


## **Vistas**

Las vistas están organizadas en carpetas separadas dentro de `resources/views/` según cada entidad y utilizan Blade como motor de plantillas.

### Estructura de vistas por entidad

**`layout.blade.php`**: Plantilla principal que define la estructura base de la aplicación. Las demás vistas extienden de esta mediante `@extends('layout')`.

Todas las entidades del sistema (clientes, sedes, planes, entrenadores, entrenamientos y reservas) siguen una estructura de vistas consistente organizada en sus respectivas carpetas dentro de `resources/views/`:

**`index.blade.php`**: Muestra el listado completo de registros en una tabla con todos sus datos relevantes. Incluye un botón para añadir nuevos registros y columnas con acciones para editar y eliminar cada elemento.

**`create.blade.php`**: Vista que contiene el formulario para crear un nuevo registro. Incluye parciales con formularios reutilizables (`_form.blade.php`) que contienen todos los campos necesarios según la entidad. En el caso de entidades con relaciones (como entrenadores con sedes, o entrenamientos con entrenadores), se muestran selectores desplegables para elegir las entidades relacionadas.

**`update.blade.php`**: Vista que muestra el formulario para editar un registro existente. Utiliza parciales de formulario (`_formupdate.blade.php` o `_form.blade.php`) y `@method('PUT')` para indicar que es una actualización. Los datos actuales se pre-cargan usando `old('campo', $entidad->campo)`. En campos sensibles como contraseñas, estos son opcionales durante la edición, manteniéndose el valor actual si no se proporciona uno nuevo.

## Funcionamiento de la aplicación

La aplicación funciona como un sistema completo de gestión de gimnasio con operaciones CRUD (Crear, Leer, Actualizar, Eliminar) implementadas para todas las entidades del sistema.

### Flujo general de operaciones

**Listar registros:**
Cada entidad muestra un listado completo en su vista `index.blade.php` con todos sus datos relevantes en formato de tabla. Cada fila incluye una columna de acciones con botones para editar y eliminar.

**Crear un registro:**
Al hacer clic en el botón de "Añadir" (Cliente, Sede, Plan, etc.), se carga el formulario de creación correspondiente donde se introducen todos los datos requeridos. Los datos se validan en el controlador mediante `$request->validate()` con reglas específicas para cada entidad. Si la validación es correcta, se guarda el nuevo registro y se redirige al listado con un mensaje de confirmación.

**Editar un registro:**
Al hacer clic en "Editar", se carga el formulario de edición con los datos actuales del registro ya pre-cargados mediante route model binding. Tras la validación y actualización, se redirige al listado.

**Eliminar un registro:**
Al hacer clic en "Eliminar", aparece un modal de confirmación mostrando información del registro. Si se confirma, se envía un formulario con el método DELETE que ejecuta la eliminación en el controlador y redirige al listado.

### Validaciones específicas por entidad

**Clientes:** Validación de edad mínima (15 años), altura (1.40-2.10m), peso (40-200kg), objetivos predefinidos y contraseñas encriptadas con `bcrypt()`.

**Sedes:** Validación de horarios en formato HH:MM, verificación de que la hora de cierre sea posterior a la apertura, y ciudades limitadas a Tarragona o Barcelona.

**Planes:** Validación de longitud de campos (nombre máx. 100 caracteres, descripción máx. 500) y precio numérico positivo menor a 9999.99.

**Entrenadores:** Validación de especialidades predefinidas (Musculación, CrossFit, Funcional, Yoga, Rehabilitación), verificación de existencia de la sede asignada, y emails únicos.

**Entrenamientos:** Validación de capacidad entre 1 y 30 personas, verificación de que la fecha de fin sea posterior a la fecha de inicio, y validación de existencia del entrenador asignado.

**Reservas:** Validación de existencia del cliente y entrenamiento seleccionados en sus respectivas tablas.

### Relaciones entre entidades

El sistema implementa las siguientes relaciones:

**Clientes y Planes (Muchos a Muchos):**
Un cliente puede contratar múltiples planes y un plan puede ser contratado por múltiples clientes.
La tabla pivot `client_plan` almacena la relación con campos adicionales: fecha_inicio, fecha_fin y estado.

**Sedes y Entrenadores (Uno a Muchos):**
Una sede puede tener múltiples entrenadores, pero cada entrenador pertenece a una única sede.

**Entrenadores y Entrenamientos (Uno a Muchos):**
Un entrenador puede impartir múltiples entrenamientos, pero cada entrenamiento es impartido por un único entrenador.

**Clientes y Reservas (Uno a Muchos):**
Un cliente puede hacer múltiples reservas.

**Entrenamientos y Reservas (Uno a Muchos):**
Un entrenamiento puede tener múltiples reservas (limitadas por su capacidad).

## Capturas de pantalla

  ### Entidad Clientes

<img src="public/images/Entidad - Clientes/Listar.png" height="230px">

<img src="public/images/Entidad - Clientes/Crear.png" height="230px">

<img src="public/images/Entidad - Clientes/Editar.png" height="230px">

<img src="public/images/Entidad - Clientes/Eliminar.png" height="230px">

### Entidad Entrenadores

<img src="public/images/Entidad - Entrenadores/Listar.png" height="150px">

<img src="public/images/Entidad - Entrenadores/Crear.png" height="150px">

<img src="public/images/Entidad - Entrenadores/Editar.png" height="150px">

### Entidad Sedes

<img src="public/images/Entidad - Sedes/Listar.png" height="150px">

<img src="public/images/Entidad - Sedes/Crear.png" height="150px">

<img src="public/images/Entidad - Sedes/Editar.png" height="150px">

### Entidad Planes

<img src="public/images/Entidad - Planes/Listar.png" height="150px">

<img src="public/images/Entidad - Planes/Crear.png" height="150px">

<img src="public/images/Entidad - Planes/Editar.png" height="150px">

### Entidad Entrenamientos

<img src="public/images/Entidad - Entrenamientos/Listar.png" height="150px">

<img src="public/images/Entidad - Entrenamientos/Crear.png" height="150px">

<img src="public/images/Entidad - Entrenamientos/Editar.png" height="150px">

### Entidad Reserva

<img src="public/images/Entidad - Reserva/Listar.png" height="150px">

<img src="public/images/Entidad - Reserva/Crear.png" height="150px">