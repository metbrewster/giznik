<?php

		/// GLOBAL VERSION INFORMATION
						$html_version = '0.0.1';

		/// START PHP SESSION TO COLLECT USER INFORMATION
						session_start();
		
		/// SHRINK PAGE BEFORE SENDING TO USER
						function sanitize($buffer) {
							$search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
							$replace = array('>', '<', '\\1');
							$buffer = preg_replace($search, $replace, $buffer);
							function gzip_doc($buffer) { if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) { return ob_gzhandler($buffer, 5); } else { return $buffer; }}
							return gzip_doc($buffer);
						}
						
						ob_start("sanitize");

		/// LOAD REQUIRED INTERNAL DOCUMENTS
						require('functions/glob_document.php');
						require('functions/filename_geni.php');
						
						
		/// CREATE MINIMAL SESSION VARIABLES
						$_SESSION['client_network_address'] = $_SERVER['REMOTE_ADDR'];
						$_SESSION['client_address_observation_path'] = $_SERVER['SCRIPT_FILENAME'];
						$_SESSION['client_address_observation_base'] = basename($_SERVER['SCRIPT_FILENAME']);
						$_SESSION['client_address_browser_type'] = ''; // include browser enviroment document
						$_SESSION['client_address_machine_type'] = ''; // include browser enviroment document	
		
?>

<!doctype html>

<?php 
		
		goto skip_comment;
		
		echo "<!-- ".sha1($html_version)." --|";
		echo "|-- ".$_SESSION['client_network_address']." --|";
		echo "|-- ".$_SESSION['client_address_observation_base']." --|";
		echo "|-- ".$timeTaken = time() - $_SERVER['REQUEST_TIME']; echo $timeTaken." -->";		
		
		skip_comment:
?>

<html lang="en">
