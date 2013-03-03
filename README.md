Comparador de programas electorales
===================================

Este proyecto nace en el marco del [Hack for Good](http://hackforgood.net/) que se celebró en Madrid
los días 1, 2 y 3 de marzo de 2013.

El reto, en resumen, consistía en desarrollar un comparador de programas electorales en formato web.

Más información, en el [vídeo de presentación del reto](http://www.youtube.com/watch?v=X-_ev0IwiIE),
que grabamos durante el evento. ¡Bien!

Instalación
-----------

Para empezar a usar el proyecto, debes "decirle" dónde tendrás la base de datos. Para hacerlo, basta
con copiar el fichero db-config.sample.php con el nombre db-config.php, en la tabla config y
especificar ahí los datos de conexión:

```php
<?php
	define("DB_HOST", "host");
	define("DB_NAME", "database");
	define("DB_USER", "user");
	define("DB_PASSWORD", "password");
?>
```

Actualizaciones
---------------

El script db/upgradedb.php, compara la versión de la base de datos con la versión del código
que se está ejecutando. Para simplificar las tareas de administración, el script es invocado
automáticamente (es la primera llamada que se hace desde header.php).

En caso de que la versión de la base de datos sea la que corresponde con el código (será lo
más común), el script es transparente y no hace nada.

En caso de que la versión del código sea superior, actualiza la base
de datos pasando por cada uno de los scripts de actualización intermedios (entre la versión
de la base de datos y la del código).

Datos relevantes:

* La versión del código se especifica en db/db-version.php.
* La versión de la base de datos se especifica en el campo version de la tabla DatabaseInfo.
* Cada vez que se actualice la estructura de datos, debe actualizarse db/db-version.php y crearse el
script db-v{version}.sql que corresponda (sustituyendo {version}) por la versión correspondiente.

Tecnologías
-----------

Tratamos, en todo momento, de basarnos en estándares accesibles. Entre otros, hemos utilizado:

* [Bootstrap 2.3.1](http://twitter.github.com/bootstrap/)
* [Highcharts 2.3.5](http://www.highcharts.com)

Estructura de ficheros
----------------------

* index.php - Landing page: muestra un gráfico destacado cada semana.
* graphs.php - Página de visualización de gráficos.
* parties.php - Listado de partidos políticos.
* party.php - Ficha particular de un partido político.
* promises.php - Listado de promesas electorales: pendientes, cumplidas e incumplidas.
* programs.php - Comparativa de programas electorales.

