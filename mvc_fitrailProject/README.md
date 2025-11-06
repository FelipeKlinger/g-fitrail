# Proyecto Fitrail — Refactorización MVC (Entidad: Cliente)

Este repositorio contiene la primera refactorización a patrón Modelo-Vista-Controlador (MVC) de una entidad del sistema de gestión de un gimnasio: la entidad **Cliente**.

## Entidad refactorizada

- Entidad: **Cliente**
  - Campos manejados (según el modelo actual): id, nombre, email, edad, altura, peso, objetivo, password_hash.
  - Operaciones implementadas en models/clienteModel.php: listar, agregar, editar y eliminar clientes (con validaciones básicas y hashing de contraseña).

## Estructura del proyecto:

- `index.php` — Punto de entrada; crea el contr olador y dirige la acción según ?accion=.
- `config/db.php` — Conexión PDO a la base de datos MySQL (configuración pensada para Docker: host mysql, base `fitrail`, usuario `root`).
- `controllers/clienteController.php` — Controlador principal para la entidad Cliente. Invoca al modelo y carga las vistas.
- `models/clienteModel.php` — Implementa la lógica de datos: consultas SQL, inserciones, actualizaciones y eliminación.
- `views/lista.php` — Lista de clientes (plantilla mínima).
- `views/agregar.php` — Formulario para crear clientes (plantilla mínima).
- `views/editar.php` — Plantilla vacía (pendiente).
- `views/eliminar.php` — Plantilla vacía (pendiente).

## Roles y tareas asignadas

Para garantizar una buena organización y coordinación del trabajo, se han definido distintos roles dentro del grupo, de acuerdo con las necesidades técnicas y documentales del proyecto.

**Coordinador (Andrés):**

Se encarga de gestionar el tablero de tareas (GitLab ToDo), realizar el seguimiento del estado del proyecto y asegurar que todo esté actualizado y dentro de los plazos establecidos. 
También verifica la coherencia entre las distintas ramas del repositorio y valida que el código cumpla con las buenas prácticas acordadas por el grupo. 

**Desarrollador de Modelo (Andrés y Oscar):**

Responsable de la implementación y mantenimiento de la capa de datos (Model).
Gestiona la conexión con la base de datos mediante PDO, crea y refactoriza las consultas SQL, y define las funciones necesarias para acceder y modificar la información.


**Desarrollador de Controlador (Felipe):**

Se encarga de organizar la lógica y el flujo MVC, implementando los métodos que conectan el modelo con las vistas y controlan la comunicación entre las distintas partes de la aplicación. 
Además, aplica buenas prácticas como el patrón PRG (Post/Redirect/Get) para mejorar la seguridad y la usabilidad.

**Diseñador de Vista (Dani):**

Adapta y mejora el contenido HTML y CSS para lograr una presentación clara, moderna y coherente con la identidad visual del proyecto.
También tiene en cuenta aspectos de usabilidad y accesibilidad, e implementa pequeños fragmentos de JavaScript para mejorar la interactividad de las vistas.

**Documentador (Dani):**

Es responsable de actualizar la memoria técnica y el archivo README.md, reflejando los avances y cambios realizados durante el desarrollo.
Incluye capturas del funcionamiento, explica brevemente cada parte del sistema y mantiene un registro de versiones (changelog) con las principales actualizaciones.