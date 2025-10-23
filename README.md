# Aplicación CRUD con PDO - Maquinistas #

**Archivo funcions.php**
En este archivo se centralizan todas las funciones necesarias para el funcionamiento de la aplicación.
Aquí se definen las operaciones principales del CRUD: leer, agregar, editar y eliminar usuarios.
Además, contiene la conexión a la base de datos mediante PDO, lo que permite una gestión segura y eficiente de las consultas SQL.
Este archivo es requerido en todos los componentes de la aplicación mediante: require  __DIR_ . '/funcions.php';

Hemos creado la entidad cliente, ya que esta entidad es una de las principales de nuestro proyecto, es un modelo básico con atributos reales que se usarán para hacer métodos después.

**Funcionamiento de la aplicación con acciones CRUD**
La aplicación muestra un listado de clientes almacenados en la base de datos.
En la vista principal (index.php), se ejecuta la función leerUsuarios() que obtiene todos los registros mediante una consulta SELECT, organizando cada campo en su celda dentro de una tabla.
Se reservan columnas adicionales para las acciones del CRUD (editar y eliminar).

Al crear un nuevo usuarios, los datos ingresados en el formulario se recogen y se envían a la función AltaUsuarios($nombre, $email, $edad, $altura, $peso, $objetivo, $pass1, $pass2).

La función utiliza una sentencia preparada ($pdo->prepare) para ejecutar un INSERT INTO y registrar el nuevo usuario de forma segura.


El proceso de edición sigue una lógica similar al registro.
El usuario se identifica por su ID recogida, y los datos actuales se muestran precargados en el formulario para facilitar la modificación.
Hemos usado htmlspecialchars() para evitar errores al mostrar caracteres especiales y prevenir vulnerabilidades.
Una vez confirmadas las validaciones, se ejecuta una consulta UPDATE mediante una sentencia preparada de nuevo con ($pdo->prepare).

if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        die("ID no proporcionado.");
    }
    
a href="editar.php?id=<?= $usuari['id'] ?>">Editar /a> |
a href="eliminar.php?id=<?= $usuari['id'] ?>">Eliminar /a>

En el index hay una URL hacia el metodo eliminar/editar, esto es lo que recoge la id y con la condición validamos si existe y la guardamos en una variable que luego usamos para llamar a la función que lee los usuarios que recorra el array en busca del usuario con esa id.


Para eliminar un cliente, el usuario se identifica por su ID, obtenida a través de $_GET.
Se muestra un mensaje de confirmación antes de ejecutar la eliminación.
La función prepara una sentencia DELETE y la ejecuta con execute() para borrar el usuario definitivamente.

Sentencia SQL que usamos para crear la tabla de la entidad y conectar mediante $PDO:

CREATE TABLE cliente (
  id int NOT NULL,
  nombre varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  edad int NOT NULL,
  peso decimal(10,0) NOT NULL,
  altura int NOT NULL,
  objetivo varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  password_hash varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL

) 

**Imágenes de interés**

Imágen de la entidad en la bbdd:
    <img src="/crud/img/modelo de datos entidad clientes.png" alt="Modelo cliente" width="400" />

Imágen del output de registro:
    <img src="/crud/img/Output_registro.png" alt="Modelo cliente" width="400" />

Imágen del output de edición:
    <img src="/crud/img/Output_editar.png" alt="Modelo cliente" width="400" />

Imágen del output eliminar:
    <img src="/crud/img/Output_eliminar.png" alt="Modelo cliente" width="400" />



**Checklist d’autoavaluació (grup)**

[X]  Hem definit una **entitat real** del projecte i la seva taula a MySQL.
[X]  Tenim un **fitxer de connexió PDO** reutilitzable.
[X]  Hem creat funcions per a les 4 operacions del **CRUD**.
[X]  Les dades es mostren en una **taula HTML** amb accions d’editar i eliminar.
[X]  Hem aplicat **validació bàsica** i **protecció contra injeccions SQL**.
[X]  Hem fet **commits col·laboratius** al repositori amb missatges clars.
[X]  Ens hem **organitzat** amb milestones/issues/tasks al **ToDo list** de Gitlab.
[X]  Hem documentat l’entitat, l’esquema i el repartiment de tasques al README.
