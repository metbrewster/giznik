<?php

/**
 * Get the information regarding the last time the file was modified
 */
 
	$last_modified = filemtime($_SERVER['SCRIPT_FILENAME']);

/**
 * Create a hash for the document
 */
 
 $eTag = md5_file($_SERVER['SCRIPT_FILENAME']);

/**
 * Get the last modified date
 */
 
 $ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);

/**
 * Get the HTTP_IF_NONE_MATCH header if set (eTag: unique file hash)
 */
 
 $eTag_header = (isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);

/**
 * Set the last-modified header
 */
 
 header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified)." GMT");

/**
 * Set eTag header
 */
 
 header("Etag: $eTag");

/**
 * Ensure cache control has been enabled
 */
 
 header('Cache-Control: public');

/**
 * Check to see if the page has been changed. if not, send a 304 code and exit
 */
 
 if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified || $eTag_header == $eTag) {
 	header("HTTP/1.1 304 Not Modified");
	 exit;
	}

?>