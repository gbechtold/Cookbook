<?php

if($_GET) {
$airplanename = htmlspecialchars($_GET["airplane"]); 
echo 'Currently '.$airplanename.' is in the loop.';
	for ($i = 1, $j = strlen($airplanename); $i <= $j; $i++) {
		echo '</br> looping'.$i;
	}
};

if(!$_GET) {
echo 'No airplane is flying';
};