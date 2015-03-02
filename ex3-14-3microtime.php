<?php

$a = array(0,1,2,3,4,5,6,6,7);
print_r($a);
$time_start = microtime();

foreach($a as $buchstaben => $b) {
	echo '</br></br>'.$b.'</br></br></br></br>';
	echo microtime();
}

break;