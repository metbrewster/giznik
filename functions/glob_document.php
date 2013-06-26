<?php

		/// CLASS REQUIRES A DIRECTORY PATH AND FILE TYPE AS INPUT, WILL RETURN ALL FILES IN DIRECTORY
		
		class fetchdoc {
			
			function css_include($directory, $type) {
				foreach( glob( "$directory/*.$type" ) as $col ) {
					echo '<link rel="stylesheet" type="text/css" media="all" href="', $col, '">';
				}
			}
			
			function jsp_include($directory, $type) {
				foreach( glob( "$directory/*.$type" ) as $col ) {
					echo '<script type="text/javascript" src="', $col, '"></script>';
				}
			}
			
			function pcss_include($directory, $type) {
				foreach( glob( "$directory/*.$type" ) as $col ) {
					echo '<link rel="stylesheet" type="text/css" media="all" href="', $col, '">';
				}
			}
			
		}


		### CLASS EXECUTION
						$fetchdoc = new fetchdoc();
?>