<?php

		/// ARRAY TO STORE LEFT PADDLE LINK AND TEXT
						$uibb_right_array = array('Login' => '#');
						
		///	OUTPUT LEFT ARRAY INFORMATION TO BROWSER
						foreach ($uibb_right_array as $text => $anchor) {
							if (basename($_SERVER['SCRIPT_FILENAME']) == $anchor) {
								echo '<a href="', $anchor, '" title="Visit the ', $text , ' page via clicking this link"><li class="active">', $text, '</li></a>';
							} else { echo '<a href="', $anchor, '" title="Visit the ', $text , ' page via clicking this link"><li>', $text, '</li></a>'; } 
						}
?>