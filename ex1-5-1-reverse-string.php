<?php

if($_GET){
	$spaceships = htmlspecialchars($_GET['space']);
	echo $spaceships."</br>";
	
	$words = explode('e',$spaceships);
	$words = array_reverse($words);
	echo join(' - - ',$words);
	echo "</br>";
	
	
	
		for($i = "0", $j = strlen($spaceships); $i < $j; $i++) {
			echo $i;
			}

};

if(!$_GET) {

};