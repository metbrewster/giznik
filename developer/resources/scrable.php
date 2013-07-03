<?php

/**
 * Function to generate a new random 'scabled' string
 */
 
 function new_scrable($length) {
  $str = '';
  $key = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), range('a', 'z'), range('a', 'z'));
  
  for($c = 0; $c < $length; $c++) {
   $str .= $key[array_rand($key)];
  }
  
  return $str;
 }
 
/**
 * Function to rename a directory of files with a random 'scabled' string
 */
 
 function instance_names($directory, $type, $method) {
  if ( $method == 1 ) {
   
   if ( rename ( $directory, dirname($directory)."/". new_scrable(10) . ".$type" ) ) {
    echo 'file renamed';
   } else { echo 'file not renamed, something went wrong'; }
   
  } else if ( $method == 2 ) {
   
   foreach ( glob ( $directory."*.".$type ) as $filename ) {
    
   if ( $n = rename ( $filename, dirname($filename)."/". new_scrable(18) . ".$type" ) ) {
    echo 'files renamed'."<hr>";
   } else { echo 'files not renamed, something went wrong'."<hr>"; }
   
   }
   
  }
 }

?>