<?php

		/// PICK A RANDOM IMAGE
						function random_image_uiri() {
							$array = array('', '../images/_uiri/1.jpg', '../images/_uiri/2.jpg', '../images/_uiri/3.jpg');
							$call		= rand(1, count($array) - 1);
							echo $array[$call];
						}


?>