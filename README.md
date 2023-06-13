
![Logo_BusGo](https://github.com/Ronald-Gutierrez/BusGo/assets/83055437/03cd52c7-a916-45f1-b92d-956a2069c8f9)

<h1 align="center">BUSGO</h1>
<h1 align="center">Reserva de pasajes de buses online</h1>

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


## :label: Tecnologias Usadas <br>
- **a)** *Laravel* 
- **b)** *Mysql* 
- **c)** *Lenguaje de Programación Php* 
- **d)** *TypeScript* 

 
## :label: Interfaz del Proyecto <br>
	


## :red_circle: Desarrollo

### Funcionalidades
Se escribio los requisitos específicos de BusGO en el siguiente documento, el cual posee los requisitos funcionales(RF) y los requisitos no funcionales(RNF) de este proyecto. [Documentación Requisitos Específicos BusGO](https://docs.google.com/document/d/1-cylmJXhp7sCNWUJFx0uLShQl1hN8ZKIwFM0lp-MjKM/edit).

### Modelo Entidad Relación

![MER](https://github.com/Ronald-Gutierrez/BusGo/blob/main/Desarrollo/MER_busgo.jpg)

### Modelo Logico

![ML](https://github.com/Ronald-Gutierrez/BusGo/blob/main/Desarrollo/MODELO_LOGICO.jpg)

## XML de MODELO LOGICO:

<?xml version="1.0" encoding="utf-8" ?>
<!-- SQL XML created by WWW SQL Designer, https://github.com/ondras/wwwsqldesigner/ -->
<!-- Active URL: https://sql.toad.cz/ -->
<sql>
<datatypes db="mysql">
	<group label="Numeric" color="rgb(238,238,170)">
		<type label="Integer" length="0" sql="INTEGER" quote=""/>
	 	<type label="TINYINT" length="0" sql="TINYINT" quote=""/>
	 	<type label="SMALLINT" length="0" sql="SMALLINT" quote=""/>
	 	<type label="MEDIUMINT" length="0" sql="MEDIUMINT" quote=""/>
	 	<type label="INT" length="0" sql="INT" quote=""/>
		<type label="BIGINT" length="0" sql="BIGINT" quote=""/>
		<type label="Decimal" length="1" sql="DECIMAL" re="DEC" quote=""/>
		<type label="Single precision" length="0" sql="FLOAT" quote=""/>
		<type label="Double precision" length="0" sql="DOUBLE" re="DOUBLE" quote=""/>
	</group>

	<group label="Character" color="rgb(255,200,200)">
		<type label="Char" length="1" sql="CHAR" quote="'"/>
		<type label="Varchar" length="1" sql="VARCHAR" quote="'"/>
		<type label="Text" length="0" sql="MEDIUMTEXT" re="TEXT" quote="'"/>
		<type label="Binary" length="1" sql="BINARY" quote="'"/>
		<type label="Varbinary" length="1" sql="VARBINARY" quote="'"/>
		<type label="BLOB" length="0" sql="BLOB" re="BLOB" quote="'"/>
	</group>

	<group label="Date &amp; Time" color="rgb(200,255,200)">
		<type label="Date" length="0" sql="DATE" quote="'"/>
		<type label="Time" length="0" sql="TIME" quote="'"/>
		<type label="Datetime" length="0" sql="DATETIME" quote="'"/>
		<type label="Year" length="0" sql="YEAR" quote=""/>
		<type label="Timestamp" length="0" sql="TIMESTAMP" quote="'"/>
	</group>
	
	<group label="Miscellaneous" color="rgb(200,200,255)">
		<type label="ENUM" length="1" sql="ENUM" quote=""/>
		<type label="SET" length="1" sql="SET" quote=""/>
		<type label="Bit" length="0" sql="bit" quote=""/>
	</group>
</datatypes><table x="517" y="642" name="Usuario">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="contraseña" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<row name="nombre" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<row name="correo" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<row name="telefono" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="644" y="434" name="cliente">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="Usuario" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="690" y="782" name="Empresa">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="Usuario" row="id" />
</row>
<row name="direccion" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<row name="RUC" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="927" y="767" name="ruta">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="id_empresa" null="0" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="Empresa" row="id" />
</row>
<row name="origen" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<row name="destino" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
<key type="INDEX" name="">
<part>id_empresa</part>
</key>
</table>
<table x="890" y="401" name="reserva">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="cliente" row="id" />
</row>
<row name="num_asiento" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="1104" y="504" name="Viaje">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="fecha_inicio" null="1" autoincrement="0">
<datatype>DATE</datatype>
<default>NULL</default></row>
<row name="fecha_retorno" null="1" autoincrement="0">
<datatype>DATE</datatype>
<default>NULL</default></row>
<row name="estado" null="1" autoincrement="0">
<datatype>CHAR</datatype>
<default>NULL</default></row>
<row name="id_reserva" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="reserva" row="id" />
</row>
<row name="id_ruta" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="ruta" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
<key type="INDEX" name="">
<part>id_reserva</part>
<part>id_ruta</part>
</key>
</table>
<table x="1275" y="537" name="bus">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="num_nbus" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="capacidad" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="estado" null="1" autoincrement="0">
<datatype>CHAR</datatype>
<default>NULL</default></row>
<row name="id_viaje" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="Viaje" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
<key type="INDEX" name="">
<part>id_viaje</part>
</key>
</table>
</sql>

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

