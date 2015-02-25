<?php

$words = explode(' ','This is my basic sentence');

foreach($words as $word => $a) {
	echo $a."_";	
}
echo "</br></br>";
print_r($words);