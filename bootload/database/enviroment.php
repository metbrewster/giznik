<?php

		//// -- Use PHP to check what enviroment the script is being run in, use this information to set connection information accordingly
		
		$_dbHost = '';
		$_dbUser = '';
		$_dbPass = '';
		$_dbLink = '';
		
		if($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
				$_dbHost = 'localhost'; #---- local machine or a development machine.
				$_dbUser = 'root'; #--------- local machine MySQL database username..
				$_dbPass = ''; #------------- local machine MySQL database password..
				$_dbLink = 'geznik_general'; # local machine MySQL database name.....
				// notice :: failure of this safety check may result in network deprication
		} else {  }

?>