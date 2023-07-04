
![Logo_BusGo](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/03cd52c7-a916-45f1-b92d-956a2069c8f9)

<h1 align="center">BUSGO</h1>
<h1 align="center">Reserva de pasajes de buses online</h1>

## Tabla de Contenidos:
---
- [Problematica] (#problematica)
-
-
-
-
---
## Problematica:
Actualmente las empresas de transporte interprovinciales son grandes corporaciones que brindan servicios a la población; para la comodidad de los clientes, estas empresas fueron innnovando y adaptandose al cambio digital. 
La mayoria de estas empresas mantienen sus areas de ventas en los mismos establecimientos de transporte, incluso cuentan con sus propios sitios web que son constantemente mantenidos por profesionales. 
El transporte va en constante crecimiento al ritmo del aumento de la población, lo cual cada año se incrementan nuevas empresas de transporte que solo se encargan de tener su propia gestion y administracion de venta de pasajes de una manera primitiva.
Nuestro proyecto está originalmente pensado para brindar la administracion y base de datos de venta de pasajes a empresas pequeñas que desconocen este tipo de gestion de forma digital, pretendemos ayudar sin fines de lucro, para poder ir mejorando el proyecto.

## :label: Aplicaciones Similares:
- [Recorrido.pe](https://www.recorrido.pe/es).
- [Redbus](https://www.redbus.pe/).
- [Checkmybus](https://www.checkmybus.pe/).
- [Busbud](https://www.busbud.com/es).

## :label: Propósito del Proyecto

BusGO busca proporcionar una solución eficiente y conveniente para la compra de boletos de autobús, simplificando el proceso tanto para los usuarios como para las compañías de autobuses. En este contexto tambien el software tiene como posibles metas:<br>
 Facilitar la compra de pasajes: El software puede permitir a los usuarios buscar y reservar pasajes de autobús de manera rápida y sencilla, eliminando la necesidad de hacer filas en las taquillas de las terminales. Esto les ahorraría tiempo y brindaría comodidad al realizar sus transacciones desde cualquier lugar con acceso a Internet.

**a) Mejorar la experiencia del usuario:** BusGO busca ofrecer una interfaz amigable e intuitiva, permitiendo a los usuarios encontrar rápidamente los pasajes que se ajusten a sus necesidades específicas, como horarios, destinos, precios, servicios adicionales, etc.

**b) Centralizar la información:** BusGO podra integrar los horarios y precios de múltiples compañías de autobuses, brindando a los usuarios una plataforma única desde la cual puedan comparar y elegir entre diferentes opciones. Esto simplificaría el proceso de búsqueda y permitiría una toma de decisiones más informada.

**c) Ofrecer servicios adicionales:** Además de la venta de pasajes, BusGO podría proporcionar servicios complementarios, como la reserva de asientos, la emisión de boletos electrónicos, la notificación de cambios en los horarios de los autobuses, la visualización de rutas y paradas, entre otros. Estos servicios adicionales mejorarían la experiencia del usuario y agregarían valor a la plataforma.


## Tecnologias Usadas :label:
- **a)** [Laravel](https://laravel.com)
- **b)** [Mysql](https://www.mysql.com)
- **c)** [Lenguaje de Programación Php](https://www.php.net)
- **d)** [TypeScript](https://www.typescriptlang.org)
- **e)** [Xamp](https://www.apachefriends.org/es/index.html)
- **f)** [Tailwind](https://tailwindcss.com/)
- **g)** [SweetAlert](https://sweetalert2.github.io/)
- **h)** [BootsStrap](https://getbootstrap.com/)
- **i)** [Pusher](https://https://pusher.com//)

## Características

- Renderizado de un calendario para visualizar los viajes disponibles.
- Funciones para mostrar y crear viajes.
- Controlador, modelo, migración y página relacionados con los viajes.
- Relaciones y funciones para el modelo "Ruta".
- Controlador, modelo y página para la duración de los viajes.
- Rutas para los viajes y la duración de los viajes.
- Opciones para los viajes y la duración de los viajes.
- Funciones para mostrar y crear servicios.
- Página para mostrar un servicio específico.
- Página para crear un servicio específico.
- Menú lateral con rutas.
- Controlador, modelo, migración y página relacionados con las sucursales.
- Cambios menores.

## :label: Instalacion <br>

### Clonar el Repositorio de git

```bash
git clone https://github.com/Ronald-Gutierrez/BusGo.git
```

### Moverse al directorio del proyecto

```bash
cd BusGo
```

### Descargar Dependencias del Proyecto

Como las dependencias del proyecto las maneja **composer** debemos ejecutar el comando:

```bash
composer install
npm install
```

### Configurar Entorno

La configuración del entorno se hace en el archivo **.env** pero esé archivo no se puede versionar según las restricciones del archivo **.gitignore**, igualmente en el proyecto hay un archivo de ejemplo  **.env.example** debemos copiarlo con el siguiente comando:

```bash
cp .env.example .env
```

Luego es necesario modificar los valores de las variables de entorno para adecuar la configuración a nuestro entorno de desarrollo, por ejemplo los parámetros de conexión a la base de datos.

### Generar Clave de Seguridad de la Aplicación

```bash
php artisan key:generate
```

### Migrar la Base de Datos

El proyecto ya tiene los modelos, migraciones y seeders generados. Entonces lo único que nos hace falta es ejecutar la migración y ejecutar el siguiente comando:

```bash
php artisan migrate:fresh --seed
```

- **migrate:fresh** ejecuta la migración **eliminando** todas las tablas y volviendo a generarlas.
- **--seed** ejecuta los Seeders habilitados

### Instalación Pusher y Echo 
- Pusher es una herramienta que permite a los desarrolladores agregar funcionalidades en tiempo real a sus aplicaciones mediante la entrega instantánea de mensajes a través de conexiones WebSocket, lo que brinda una experiencia más interactiva y dinámica para los usuarios.
- Laravel Echo es una biblioteca de JavaScript que simplifica la implementación de aplicaciones web en tiempo real en combinación con Laravel y Pusher. Proporciona una interfaz intuitiva para escuchar eventos y recibir actualizaciones en tiempo real, permitiendo a los desarrolladores crear experiencias interactivas y dinámicas para los usuarios.
```bash
composer require pusher/pusher-php-server
npm install laravel-echo
```
### Ejecutar el proyecto
La instrucción php artisan serve se utiliza en Laravel para iniciar el servidor de desarrollo integrado (artisan) y ejecutar la aplicación web en un entorno local, en la direccion indicada del archivo **.env**.
```bash
php artisan serve
```
Una ves realizado eso, en otra ventana de comandos, tipeamos el siguiente codigo, es un comando comúnmente utilizado en proyectos Laravel. Cuando ejecutas este comando en un proyecto Laravel, utiliza Laravel Mix, una herramienta de compilación de activos, para compilar y combinar los archivos CSS y JavaScript de tu aplicación
```bash
npm run dev
```
 
## :label: Interfaz del Proyecto <br>
	

## :red_circle: Desarrollo

### Funcionalidades
Se escribio los requisitos específicos de BusGO en el siguiente documento, el cual posee los requisitos funcionales(RF) y los requisitos no funcionales(RNF) de este proyecto. [Documentación Requisitos Específicos BusGO](https://docs.google.com/document/d/1-cylmJXhp7sCNWUJFx0uLShQl1hN8ZKIwFM0lp-MjKM/edit).

### Modelo Entidad Relación

![MER](https://github.com/Ronald-Gutierrez/BusGo/blob/main/Desarrollo/MER_busgo.jpg)

### Modelo Logico

![ML](https://github.com/Ronald-Gutierrez/BusGo/blob/main/Desarrollo/MODELO_LOGICO.jpg)
![ML2](https://github.com/Ronald-Gutierrez/BusGo/blob/main/Desarrollo/MODELO_LOGICO2.jpg)

### Diagrama de Casos de Uso

![Casos_Uso](https://github.com/Ronald-Gutierrez/BusGo/blob/main/Desarrollo/Diagrama_Casos_Uso_v2.jpg)

### Arquitectura

<p align="center">
  <img src="https://www.freecodecamp.org/espanol/news/content/images/2021/06/MVC3.png" width="500" high="500">
</p>

La arquitectura Modelo-Vista-Controlador (MVC) es un patrón de diseño ampliamente utilizado en el desarrollo web. En este proyecto, seguimos el enfoque MVC utilizando el framework Laravel.

#### Modelo

El modelo en Laravel representa la capa de acceso a datos de la aplicación. Aquí se definen las estructuras de datos, las reglas de validación y las interacciones con la base de datos.

#### Vista

La vista en Laravel se encarga de la presentación de los datos al usuario. Utilizamos el motor de plantillas Blade para crear vistas dinámicas y reutilizables.

#### Controlador

El controlador en Laravel actúa como intermediario entre las solicitudes del usuario y la lógica de la aplicación. Los controladores se encargan de recibir las solicitudes HTTP, interactuar con los modelos y seleccionar la vista adecuada para mostrar la respuesta al usuario.

## Mockups

EL proyecto busca tener una interfaz amigable y confiable para los clientes, a traves de mockups buscamos diseñar la parte visual del proyecto.
La realizacion del proyecto es de forma progresiva por la que los mockups seran una guia final o expectativa.

### Avance del proyecto
Pagina de Inicio

![home_1](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/da09a5e2-72ac-4fe8-a28e-0ed637edd815)

Pagina para el inicio de sesion

![Login_1](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/f161987e-dd64-4a1e-ad77-c4ba6a563eff)

Pagina para el registro

![Register_1](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/c8865dc9-a829-41a8-87fc-3232be55fccf)

MOCKUPS(Figma)

Pagina de inicio

![home](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/1734e837-8a3e-4bde-9936-4d01190c9d58)

Pagina de Inicio de sesion

![Login](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/db3c2d85-0cbf-4c25-8a68-d592eb4833be)

Pagina de registro

![Register](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/68227d04-78a0-4c56-aec4-96746ad4357b)

Pagina de seleccion de destinos
![Destino_1](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/58287608-4efc-42ee-ac65-d89493160ec9)

Pagina de reserva de asiento

![reserva_1](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/20309391-99a1-48fe-a481-332fc0e0502d)

# **Estilos de Programación**

## 1. Declared-Intentions.

### *Restricciones*

## 2. Plugins.

### *Restricciones* 

## 3. Dataspaces.

### *Restricciones*

 ## 4. Resful.
### *Restricciones*

## 5. Pipeline.


# **Concepto CRUD aplicado**
CRUD hace referencia a un acrónimo en el que se reúnen las primeras letras de las cuatro operaciones fundamentales de aplicaciones persistentes en sistemas de bases de datos:
### Create (Crear registros)
### Read bzw. Retrieve (Leer registros)
### Update (Actualizar registros)
### Delete bzw. Destroy (Borrar registros)
En pocas palabras, CRUD resume las funciones requeridas por un usuario para crear y gestionar datos. Varios procesos de gestión de datos están basados en CRUD, en los que dichas operaciones están específicamente adaptadas a los requisitos del sistema y de usuario, ya sea para la gestión de bases de datos o para el uso de aplicaciones.
# **Prácticas de Código Legible**

## *1. Agrupación de código.*
   
## *2. Se Utilizo el mismo vocabulario para el mismo tipo de variable*

## *3. Identacion correspondiente* <br>

## *4. Poner en mayúscula las palabras especiales de SQL*
    
## *5. Cada función realiza solo realiza una tarea*
   
## *6. Los nombres de las funciones realizan lo mencionado*
   
## *7. Organización de Archivos y Carpetas.*

## *8. Evitar codigo redundante.* <br>

### 🔩Planificación de tareas de implementación en la herramienta TRELLO 🔩
https://trello.com/b/Ojrdhn6C/busgo-is-lll 

### 🔩COLABORADORES🔩
<a href="https://github.com/Ronald-Gutierrez">
    <img src="https://avatars.githubusercontent.com/u/113565299?v=4" width="50px">
</a>
Gutierrez Arratia Ronald Romario
<br>
<a href="https://github.com/AlbertLlica">
    <img src="https://avatars.githubusercontent.com/u/82473627?v=4" width="50px">
</a>
Llica Alvarez Albert Daniel
<br>
<a href="https://github.com/Erick-Perez12a">
    <img src="https://avatars.githubusercontent.com/u/82849144?v=4" width="50px">
</a>
Perez Chipa Erick Jesús 
<br>
<a href="https://github.com/JhenMa">
    <img src="https://avatars.githubusercontent.com/u/71655718?v=4" width="50px">
</a>
Alvarez Astete Jheremy Manuel
<br>
<a href="https://github.com/UbertoGC">
    <img src="https://avatars.githubusercontent.com/u/84751424?v=4" width="50px">
</a>
Garcia Caceres Uberto 
<br>
<a href="https://github.com/MarkoMarcelo">
    <img src="https://avatars.githubusercontent.com/u/83055437?v=4" width="50px">
</a>
Ituccayasi Umeres Marko Marcelo 
<br>

### Licencia de Laravel

<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

