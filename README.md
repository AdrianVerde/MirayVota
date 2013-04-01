Comparador de programas electorales
===================================

Este proyecto nace en el marco del [Hack for Good](http://hackforgood.net/) que se celebró en Madrid
los días 1, 2 y 3 de marzo de 2013. El reto, en resumen, consistía en desarrollar un comparador de
programas electorales en formato web.

Más información, en el [vídeo de presentación del reto](http://www.youtube.com/watch?v=X-_ev0IwiIE),
que grabamos durante el evento. ¡Bien!

Instalación
-----------

Para empezar a usar el proyecto, debes "decirle" dónde tendrás la base de datos. Para hacerlo, basta
con copiar el fichero config.sample.php con el nombre config.php, en la tabla config y
especificar ahí los datos de conexión:

```php
<?php
	define("DB_HOST", "host");
	define("DB_NAME", "database");
	define("DB_USER", "user");
	define("DB_PASSWORD", "password");

	define("URLBASE", "//host/");
?>
```

Actualizaciones
---------------

El script _db/upgradedb.php_, compara la versión de la base de datos con la versión del código
que se está ejecutando. Para simplificar las tareas de administración, el script es invocado
automáticamente.

En caso de que la versión de la base de datos sea la que corresponde con el código (será lo
más común), el script es transparente y no hace nada.

En caso de que la versión del código sea superior, actualiza la base
de datos pasando por cada uno de los scripts de actualización intermedios (entre la versión
de la base de datos y la del código).

Datos relevantes:

* La versión del código se especifica en _db/db-version.php_.
* La versión de la base de datos se especifica en el campo _version_ de la tabla _DatabaseInfo_.
* Cada vez que se actualice la estructura de datos, debe actualizarse _db/db-version.php_ y crearse el
script _db-v{version}.sql_ que corresponda (sustituyendo {version}) por la versión correspondiente.

Tecnologías
-----------

Tratamos, en todo momento, de basarnos en tecnologías open source. Entre otros proyectos, hemos utilizado:

* [Bootstrap 2.3.1](http://twitter.github.com/bootstrap/) - [Apache License v2.0](http://www.apache.org/licenses/LICENSE-2.0)
* [Highcharts 2.3.5](http://www.highcharts.com) - [Creative Commons Attribution-NonCommercial 3.0 License](http://creativecommons.org/licenses/by-nc/3.0/)
* [WideImage 11.02.19](http://wideimage.sourceforge.net/) - [GNU LGPL 2.1](http://opensource.org/licenses/lgpl-2.1.php)
* [html5uploader 11.02.19](http://code.google.com/p/html5uploader/) - [New BSD License](http://opensource.org/licenses/BSD-3-Clause)

Estructura de ficheros
----------------------

* index.php - Controla la navegación. Desde aquí se usan el resto de recursos.
* headers.php - Se encarga de "pintar" las cabeceras (los tags meta, scripts a importar, etc).
* navs.php - Se encarga de "pintar" el menú principal.
* contents.php - Se encarga de "pintar" el contenido de la página. Normalmente se apoyará en
recursos fetch_loquesea.php.
* footers.php - Se encarga de "pintar" los scripts de final de página.
