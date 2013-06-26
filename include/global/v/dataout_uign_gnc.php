<?php

		/// ARRAY TO STORE TITLE AND ANCHOR
						$uign_array = array ('home' => 'index.php', 'about' => 'about.php', 'operations' => 'operations.php', 'fleet' => 'fleet.php', 'policy' => 'policy.php', 'apply' => 'apply.php', 'contact' => 'contact.php');
						
		///	OUTPUT ARRAY DATA TO NAVBAR
						foreach ($uign_array as $text => $anchor) {
							if (basename($_SERVER['SCRIPT_FILENAME']) == $anchor) {
								echo '<a href="', $anchor, '" title="Visit the ', $text , ' page by clicking this link"><li class="active">', strtoupper($text), '</li></a>';
							} else { echo '<a href="', $anchor, '" title="Visit the ', $text , ' page by clicking this link"><li>', strtoupper($text), '</li></a>'; } 
						}

?>