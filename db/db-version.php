<?php
	/**
	* Debemos incrementarlo en una unidad cada vez que
	* cambie la estructura de la base de datos.
	*
	* En la carpeta db, habrá un fichero que contendrá
	* las modificaciones de estructura a hacer para cada
	* versión.
	*
	* Si vamos por $dbVersion = 4 y la versión instalada
	* es la 1 (version = 1 en la tabla Database), se
	* ejecutarán automáticamente los scripts:
	* - db-v1.sql
	* - db-v2.sql
	* - db-v3.sql
	*/
	$dbVersion = 4;
?>
