# Fitrail · Plataforma de gestión de gimnasio (Laravel)

Aplicación web para la gestión integral de un gimnasio con control por roles, operaciones CRUD, reservas de entrenamientos, compra de planes con Stripe, contenido dinámico con Contentful y endpoint conversacional para chatbot.

## Tabla de contenidos

1. [Resumen ejecutivo](#resumen-ejecutivo)
2. [Estado funcional](#estado-funcional)
3. [Stack técnico](#stack-técnico)
4. [Requisitos](#requisitos)
5. [Puesta en marcha local](#puesta-en-marcha-local)
6. [Variables de entorno](#variables-de-entorno)
7. [Datos de ejemplo (seed)](#datos-de-ejemplo-seed)
8. [Arquitectura funcional y seguridad](#arquitectura-funcional-y-seguridad)
9. [Rutas principales](#rutas-principales)
10. [Modelo de datos](#modelo-de-datos)
11. [Scripts útiles](#scripts-útiles)
12. [Estructura del proyecto](#estructura-del-proyecto)
13. [Capturas de pantalla](#capturas-de-pantalla)

---

## Resumen ejecutivo

Fitrail implementa una plataforma de gestión para centros deportivos orientada a tres perfiles:

- **Administrador**: gestión completa del sistema (clientes, sedes, planes, entrenadores, entrenamientos, reservas, seguimientos y usuarios), además de dashboard con métricas.
- **Cliente**: registro, contratación de plan, consulta y reserva de entrenamientos, cancelación de reservas y seguimiento de evolución física.
- **Entrenador**: visualización de sus entrenamientos y clases reservadas.

El proyecto está construido sobre Laravel 12, con interfaz Blade + Tailwind y compilación de assets con Vite.

## Estado funcional

Actualmente el sistema incluye:

- Autenticación con verificación de email y autorización por rol (`admin`, `client`, `entrenador`).
- Flujos separados por perfil de usuario.
- CRUD administrativo completo.
- Reserva/cancelación de entrenamientos con control de capacidad.
- Compra de planes mediante **Stripe Checkout** con activación en tabla pivote `client_plan`.
- Home pública con contenidos administrables desde **Contentful**.
- Endpoint para chatbot: `POST /api/dialogflow`.
- Módulo de **seguimientos** para evolución del cliente (peso, IMC, adherencia, progreso, observaciones, etc.).

## Stack técnico

### Backend

- PHP 8.2+
- Laravel 12
- Eloquent ORM
- Breeze (auth scaffolding)

### Frontend

- Blade
- Tailwind CSS
- Vite
- Alpine.js
- GSAP

### Integraciones externas

- Stripe (`stripe/stripe-php`)
- Contentful (`contentful/laravel`)
- Chart.js vía `icehouse-ventures/laravel-chartjs`

## Requisitos

- Docker + Docker Compose
- GNU Make
- (Opcional, para ejecución nativa) PHP **8.2+**, Composer, Node.js + npm

> Entorno recomendado: Docker con `Makefile` (incluido en el proyecto).

## Puesta en marcha local

### 1) Clonar repositorio

```bash
git clone <URL_DEL_REPOSITORIO>
cd <RAIZ_DEL_PROYECTO>
```

### 2) Levantar servicios Docker

```bash
make up
```

### 3) Instalar dependencias desde contenedores

```bash
make composer cmd="install"
make npm cmd="install"
```

### 4) Configurar `.env`

El proyecto ya incluye `.env`, pero puedes ajustarlo según tu entorno.

Configuración típica para Docker (MySQL en contenedor `mysql`):

Ejemplo MySQL:

```dotenv
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=fitrail
DB_USERNAME=root
DB_PASSWORD=root
```

### 5) Generar clave y preparar base de datos

```bash
make art cmd="key:generate"
make art cmd="migrate --seed"
```

> El `DatabaseSeeder` invoca `SqlDumpSeeder`, que carga datos de ejemplo para usuarios, sedes, planes, entrenadores y entrenamientos.

### 6) Ajustar permisos/cache de Laravel

```bash
make fix-perms
```

### 7) Compilar assets frontend

Modo desarrollo:

```bash
make npm-dev
```

Modo producción:

```bash
make npm-build
```

### 8) Acceso a la aplicación

El puerto final depende del `docker compose` de tu entorno. En esta instalación se ha usado habitualmente:

`http://localhost:8001`

> Si cambia el mapeo de puertos, revisa `docker compose` y ajusta la URL.

### Nota importante sobre la ubicación del `Makefile`

Este `Makefile` está preparado para trabajar con una estructura que contiene `app/laravel` como subcarpeta de la raíz de infraestructura. Ejecuta `make` desde esa raíz para que los volúmenes y rutas relativas funcionen correctamente.

## Variables de entorno

### Obligatorias (mínimo)

- `APP_KEY`
- `DB_*` (según motor)

### Stripe

- `STRIPE_KEY`
- `STRIPE_SECRET`

### Contentful

- `CONTENTFUL_SPACE_ID`
- `CONTENTFUL_ENVIRONMENT_ID` (por defecto `master`)
- `CONTENTFUL_DELIVERY_TOKEN`
- `CONTENTFUL_USE_PREVIEW` (`true|false`)

## Datos de ejemplo (seed)

El proyecto incluye seed de datos mediante `SqlDumpSeeder`.

- Se crea un usuario administrador con email `admin@fitrail.com`.
- Se cargan entidades base: planes, sedes, entrenadores, clientes y entrenamientos.

> Recomendación: para demos internas, reiniciar base de datos con `make art cmd="migrate:fresh --seed"`.

## Arquitectura funcional y seguridad

### Roles y middlewares

- `admin` → acceso a panel y CRUD completo.
- `client` → acceso a flujo de cliente.
- `entrenador` → acceso a dashboard de entrenador.
- `client.has.plan` → protege rutas de cliente que requieren plan activo/registrado.

Los alias están registrados en `bootstrap/app.php` y se aplican en grupos de rutas en `routes/web.php`.

### Redirección por rol tras autenticación

La aplicación redirige automáticamente según el rol:

- `admin` → `admin.dashboard`
- `client` → `clients.dashboard` o `clients.paso-2` (si no tiene plan)
- `entrenador` → `entrenadors.dashboard`

## Rutas principales

### Web

- `/` → home pública (Contentful), solo `guest`
- `/admin/dashboard` → dashboard admin (`auth`, `admin`)
- `/clients/paso-2` → selección de plan cliente (`auth`, `client`)
- `/clients/dashboard` → dashboard cliente (`auth`, `client`, `client.has.plan`)
- `/entrenadors/dashboard` → dashboard entrenador (`auth`, `entrenador`)

### Recursos administrativos

Bajo prefijo `/admin` y middleware `auth + admin`:

- `clients`, `sedes`, `plans`, `entrenadors`, `entrenamientos`, `reservas`, `seguimientos`, `users`

### Pagos

- `POST /checkout/{plan}`
- `GET /success/{plan}`
- `GET /cancel`

### API

- `POST /api/dialogflow`

## Modelo de datos

### Entidades principales

- `users` (auth + rol)
- `clients`
- `plans`
- `sedes`
- `entrenadors`
- `entrenamientos`
- `reservas`
- `seguimientos`
- pivote `client_plan`

### Relaciones relevantes

- `User` 1:1 `Client`
- `User` 1:1 `Entrenador`
- `Client` N:M `Plan` (con `fecha_inicio`, `fecha_fin`, `estado` en pivote)
- `Sede` 1:N `Entrenador`
- `Entrenador` 1:N `Entrenamiento`
- `Client` 1:N `Reserva`
- `Entrenamiento` 1:N `Reserva`
- `Client` 1:N `Seguimiento`
- `Entrenador` 1:N `Seguimiento`

## Scripts útiles

### Makefile (Docker / entorno recomendado)

- `make help` → listado completo de comandos
- `make up` → levanta servicios
- `make down` → detiene servicios
- `make restart` → reinicia servicios
- `make logs` → logs de contenedores
- `make fix-perms` → permisos + limpieza de cachés
- `make composer cmd="install"` → composer en contenedor
- `make npm cmd="install"` → npm en contenedor
- `make npm-dev` → build frontend en desarrollo
- `make npm-build` → build frontend en producción
- `make art cmd="migrate --seed"` → Artisan en contenedor

### Scripts de Composer del proyecto

- `composer run setup` → instalación + key + migrate + build
- `composer run dev` → servidor + queue + logs + vite (concurrently)
- `composer run test` → limpieza de config + tests

### Ejecución nativa (opcional)

- `php artisan serve`
- `php artisan migrate --seed`
- `php artisan test`
- `npm run dev`
- `npm run build`

## Estructura del proyecto

```text
app/
  Http/
    Controllers/
    Middleware/
  Models/
bootstrap/
config/
database/
  migrations/
  seeders/
public/
resources/
  css/
  js/
  views/
routes/
tests/
```

## Capturas de pantalla

### Entidad Usuarios

<img src="public/images/Entidad - Clientes/Listar.png" height="230px">

<img src="public/images/Entidad - Clientes/Crear.png" height="230px">

<img src="public/images/Entidad - Clientes/Editar.png" height="230px">

<img src="public/images/Entidad - Clientes/Eliminar.png" height="230px">

### Entidad Entrenadores

<img src="public/images/Entidad - Entrenadores/Listar.png" height="150px">

<img src="public/images/Entidad - Entrenadores/Crear.png" height="150px">

<img src="public/images/Entidad - Entrenadores/Editar.png" height="150px">

<img src="public/images/Entidad - Entrenadores/Eliminar.png" height="150px">

### Entidad Sedes

<img src="public/images/Entidad - Sedes/Listar.png" height="150px">

<img src="public/images/Entidad - Sedes/Crear.png" height="150px">

<img src="public/images/Entidad - Sedes/Editar.png" height="150px">

<img src="public/images/Entidad - Sedes/Eliminar.png" height="150px">

### Entidad Planes

<img src="public/images/Entidad - Planes/Listar.png" height="150px">

<img src="public/images/Entidad - Planes/Crear.png" height="150px">

<img src="public/images/Entidad - Planes/Editar.png" height="150px">

<img src="public/images/Entidad - Planes/Eliminar.png" height="150px">

### Entidad Entrenamientos

<img src="public/images/Entidad - Entrenamientos/Listar.png" height="150px">

<img src="public/images/Entidad - Entrenamientos/Crear.png" height="150px">

<img src="public/images/Entidad - Entrenamientos/Editar.png" height="150px">

<img src="public/images/Entidad - Entrenamientos/Eliminar.png" height="150px">

### Entidad Reserva

<img src="public/images/Entidad - Reserva/Listar.png" height="150px">

<img src="public/images/Entidad - Reserva/Crear.png" height="150px">

<img src="public/images/Entidad - Reserva/Editar.png" height="150px">

<img src="public/images/Entidad - Reserva/Eliminar.png" height="150px">