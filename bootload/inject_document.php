<?php

/**
 * Class which will pull a list of documents and inject them into the caller page
 */
 
 class inject_document {
  
  // globi pull css documents
  
  function css_pull($xdir) {
   foreach(glob("$xdir/*.css") as $doc) {
    echo '<link rel="stylesheet" type="text/css" media="all" href="', $doc, '">';
   }
  }
  
  // globi pull script documents
  
  function jsp_pull($xdir, $xtype) {
   foreach(glob("$xdir/*.$xtype") as $doc) {
    echo '<script type="text/javascript" src="', $doc, '"></script>';
   }
  }
  
  // globi pull php enabled css documents
  
  function cphpd_pull($xdir, $xtype) {
   foreach(glob("$xdir/*.$xtype") as $doc) {
    echo '<link rel="stylesheet" type="text/css" media="all" href="', $doc, '">';
   }
  }
  
 }
 
/**
 * Create an instance of the inject_document class
 */
 
 $inject_document = new inject_document();

?>