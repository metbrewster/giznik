<?php

/**
 * Sanitize page before return request to client, compress whitespace and return in gzip encoding
 */

 function sanitize($buffer) {
  function whitespace_reject($buffer) {
   
   $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
   $replace = array('>', '<', '\\1');
   
   $buffer = preg_replace($search, $replace, $buffer);
   return $buffer;
   
  }
  
  function output_gzip($buffer) {
   if (substr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    return ob_gzhandler($buffer, 5);
   } else { return $buffer; }
  }
  
  return whitespace_reject(output_gzip($buffer));
 }
 
 ob_start("sanitize");

/**
 * Set default time and create time related variables
 */
 
 date_default_timezone_set('Europe/London');
 $current_time = strftime('%T');
 echo $current_time;
 
/**
 * Include required document for basic functions
 */
 
 include 'bootload/inject_document.php';
 
?>