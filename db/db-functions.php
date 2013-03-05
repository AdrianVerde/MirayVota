<?php
        require_once(__DIR__ . "/../config/db-config.php");

        function getParties() {
       	       return getObject("Parties");
        }

        function getPromises() {
       	       return getObject("Promises");
        }

        function getLists() {
       	       return getObject("Lists");
        }

        function getCandidates() {
       	       return getObject("Candidates");
        }

        function getTopics() {
       	       return getObject("Topics");
        }

	function getObject($objectName) {
		$query = "SELECT * FROM $objectName;";
		return getArrayFromSql($query);
	}

        function getParty($partyId) {
        	       if (is_numeric($partyId)) {
                        $query = "SELECT * FROM Parties WHERE partyId = $partyId";
                        return getArrayFromSql($query);
                }
        }

        function getPromisesByParty($partyId) {
        	       if (is_numeric($partyId)) {
                        $query = "SELECT * FROM Promises WHERE partyId = $partyId";
                        return getArrayFromSql($query);
                }
        }

        function getListsByParty($partyId) {
        	       if (is_numeric($partyId)) {
                        $query = "SELECT * FROM Lists WHERE partyId = $partyId";
                        return getArrayFromSql($query);
                }
        }
        
        function getCandidatesByParty($partyId) {
        	       if (is_numeric($partyId)) {
                        $query = "SELECT * FROM Candidates WHERE partyId = $partyId";
                        return getArrayFromSql($query);
                }
        }
        
        function getTopicsByParty($partyId) {
        	       if (is_numeric($partyId)) {
                        $query = "SELECT * FROM Topics WHERE partyId = $partyId";
                        return getArrayFromSql($query);
                }
        }

        function getArrayFromSql($sql) {
        	       $mysqli = tryConnection();
        	       
                $result = $mysqli->query($sql);
                while($row = $result->fetch_assoc()) {
					         $array[] = $row;
					 }

                $mysqli->close();					 
                
					 return $array;
        }
        
        function tryConnection() {
		        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		        $mysqli->set_charset("utf8");
		
		        if (mysqli_connect_errno()) {
		                printf("Conexión fallida: %s\n", mysqli_connect_error());
		                exit();
		        }
		        
		        return $mysqli;
        }
?>
