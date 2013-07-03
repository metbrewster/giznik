<?php

/**
 * Database Connection Information >>> Stored in variables
 */
		
		$_dbHost = '';
		$_dbUser = '';
		$_dbPass = '';
		$_dbLink = '';
		
		if($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
				$_dbHost = 'localhost'; #---- local machine or a development machine.
				$_dbUser = 'root'; #--------- local machine MySQL database username..
				$_dbPass = ''; #------------- local machine MySQL database password..
				$_dbLink = 'geznik_general'; # local machine MySQL database name.....
		} else {  }

?>