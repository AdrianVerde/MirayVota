<?php
	require_once(__DIR__ . "/../config/db-config.php");
	require_once(__DIR__ . "/db-version.php");

	header('Content-Type: text/html; charset=UTF-8');

	/* Si no hay ningún registro, es que se está instalando la base de datos por 1ª vez */
	initVersion();

	/* Busca la versión de la base de datos instalada */
	$dbInstalledVersion = getCurrentVersion();

	/* Si la versión de la base de datos es menor que la del código, actualiza */
	if ($dbVersion > $dbInstalledVersion) {
		for ($i = $dbInstalledVersion + 1; $i <= $dbVersion; $i++) {
			upgradeTo($i);
		}
	}

	/**
	* Si no hay ningún registro en Database, creo uno con versión = 1.
	**/
	function initVersion() {
		$mysqli = tryConnect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$mysqli->query("CREATE TABLE IF NOT EXISTS DatabaseInfo (version int);");
        	$result = $mysqli->query("SELECT version FROM DatabaseInfo;");

		$firstInstall = !($result->num_rows > 0);

        	if ($firstInstall) {
                	$mysqli->query("INSERT INTO DatabaseInfo (version) VALUES (0);");
        	}

		$mysqli->close();

		if ($firstInstall) {
			upgradeTo(1);
		}
	}

	/**
	* Devuelve la versión de la base de datos instalada.
	**/
	function getCurrentVersion() {
		$mysqli = tryConnect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	        $result = $mysqli->query("SELECT version FROM DatabaseInfo;");
        	$row = $result->fetch_assoc();
		$version = $row["version"];
		$mysqli->close();

        	return $version;
	}

	/**
	* Actualizo la base de datos a una versión determinada.
	**/
	function upgradeTo($version) {
                $mysqli = tryConnect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $filename = "db-v" . $version . ".sql";
                $script = file_get_contents(__DIR__ . "/upgrades/" . $filename);
                $mysqli->multi_query($script);
		$mysqli->close();

		$mysqli = tryConnect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $mysqli->query("UPDATE DatabaseInfo SET version = " . $version);
		$mysqli->close();
	}

        /**
        * Intento conectarme a la base de datos especificada y devuelvo el handler.
        **/
        function tryConnect($dbServer, $dbUser, $dbPassword, $dbName) {
                $mysqli = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

                if ($mysqli->connect_errno) {
                        die("Imposible conenctar con la base de datos");
                }

                return $mysqli;
        }
?>
