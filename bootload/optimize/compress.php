<?php

/**
 * Force gzip compression when able
 */
 
 function push_gzip($buffer) {
 	/* does the server support gzip? */
 	if (substr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
 		return ob_gzhandler($buffer, 5);
 	} else {
 		return $buffer;
 	}
 }

/**
 * Strip whitespace from page
 */
 
 function whitespace_reject($buffer) {
 	/* find and replace params */
		$search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
		$replace = array('>', '<', '\\1');
		
		/* find and replace inst */
		$buffer = preg_replace($search, $replace, $buffer);
		
		/* return result */
		return $buffer;
 }

/**
 * Function to push document to client request with whitespace rejection and gzip compression enabled
 */

 function sanitize($buffer) {
 	return whitespace_reject(push_gzip($buffer));
 }
	
?>