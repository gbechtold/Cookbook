<?php

function pc_check_the_count($pitch) {
	static $strikes = 0;
	static $balls = 0;
	
	
	echo $pitch."</br>";
	echo $strikes."</br>";
	echo $balls."</br>";
}

$strikes = 0;
$strikes = $strikes+10;

pc_check_the_count(10);

