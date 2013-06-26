<?php

		/// ARRAY TO STORE LEFT PADDLE LINK AND TEXT
						$uibb_left_array = array('Home' => 'index.php', 'Join' => 'apply.php', 'Contact Us' => 'contact.php');
						
		///	OUTPUT LEFT ARRAY INFORMATION TO BROWSER
						foreach ($uibb_left_array as $text => $anchor) {
							if (basename($_SERVER['SCRIPT_FILENAME']) == $anchor) {
								echo '<a href="', $anchor, '" title="Visit the ', strtolower($text) , ' page via clicking this link"><li class="active">', $text, '</li></a>';
							} else { echo '<a href="', $anchor, '" title="Visit the ', strtolower($text) , ' page via clicking this link"><li>', $text, '</li></a>'; } 
						}
?>