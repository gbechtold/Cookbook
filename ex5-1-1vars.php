<?php

$strikes = 0;
$move = 'foul';
pc_check_the_count('foul');

$mycomplexstring = array("this is","my complex","string");
$ser = serialize($mycomplexstring);
print_r($ser)."</br>";
$unser = unserialize($ser);
print_r($unser);

function pc_check_the_count($pitch) {
	static $strikes = 0;
	static $balls = 0;
	
	
	echo $pitch."</br>";
	echo $strikes."</br>";
	echo $balls."</br>";
	
	
	switch ($pitch) {
	case 'foul':
		if (2 == $strikes) break; 
		
	case 'strike':
		$strikes++;
		break;
		
	case 'ball':
		$balls++;
		break;
	}
	
	if(3 == $strikes) {
		$strikes = $balles = 0;
		return 'strike out';
	}	
		
	if(4 == $balls) {
		$strikes = $balles = 0;
		return 'walk';
		}
		
	return 'at bat';	
	
}



?>