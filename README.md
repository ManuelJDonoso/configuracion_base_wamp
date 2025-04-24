# CONFIGURACION BASICA DE INSTALACION DE APACHE 2.4 JUNTO PHP Version 8.4.6 en windows 11

## Pasos a seguir
- Copiar en C: las carpetas **php** y **Apache24**
- instalar como servicio.
	En **cmd** como **administrador** no powershell:
	
		  cd \Apache24\bin
		  httpd -k install
- Iniciar el servicio
		httpd -k start

- instala el servidor mariadb
> https://mariadb.org/download/

	En la instalación ejecutar como** servicio**
> editar el fichero **dbtest.php** de la ruta **C:\Apache24\htdocs** con los datos de instalación de la base de datos.

## Comprobar si instalación es correcta.
- pagina inicial: 
	http://localhost

- versión php:
	http://localhost/info.php

- conexion con la base de datos:
	http://localhost/dbtest.php


## añadir nuevos proyectos.
- Para añadir nuevo proyectos copiar los proyectos a la ruta **C:\Apache24\htdocs**