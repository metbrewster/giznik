<?php

		//// -- Connect to the MySQL database using industry standard PDO and all information must be encrypted as an extra note
		include 'enviroment.php'; # --- get information about the script enviroment, where is it being run from: Web Server or Local Machine?
		
		// == Instance of PDO connection
		
		try {
			$geznik = new PDO('mysql:host='.$_dbHost.';dbname='.$_dbLink.'', $_dbUser, $_dbPass, array(PDO::ATTR_PERSISTENT => true, ));
		} catch (PDOException $geznik_connE) {
			print_r($geznik_connE -> getMessage());
		}
		
		

?>