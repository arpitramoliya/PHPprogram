<?php
	// 86400 = 1 day

	setcookie('favorite_color', 'blue', time() + (86400 * 30));
    
	echo "Cookie is set.";
?>
