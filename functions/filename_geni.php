<?php

			/// FUNCTION TO GENERATE A NEW STRING WHICH HAS BEEN RANDOMIZED
							
							function new_string($length) {
								$string = ''; # instantiate variable
								$strings = array_merge( range('a', 'z'), range('A', 'Z'), range(0, 9), range('a', 'z'), range('a', 'z') ); # set variable to random string
								
								for( $count = 0; $count < $length; $count++ ) {
									
									$string .= $strings [array_rand($strings)]; # assign variable and randomize string
									
								}
								
								return $string;
								
							}
							
			/// FUNCTION TO USE PREVIOUS FUNCTION TO RENAME FILE OR A GROUP OF FILES
							# 1 = single, 2 = multiple
			
							function regen_name($directory, $type, $method) {
								
								if ( $method == 1 ) {
									
									if ( rename ( $directory, dirname($directory)."/". new_string(10) . ".$type" ) ) {
										echo 'file renamed';
									} else { echo 'file not renamed, something went wrong'; }
									
								} else if ( $method == 2 ) {
									
									foreach ( glob ( $directory."*.".$type ) as $filename ) {
										
									if ( $n = rename ( $filename, dirname($filename)."/". new_string(10) . ".$type" ) ) {
										echo 'files renamed'."<hr>";
									} else { echo 'files not renamed, something went wrong'."<hr>"; }
									
									}
									
								}
								
							}
							
							// regen_name("../images/global/styles/", "css", 2);
												
						
?>