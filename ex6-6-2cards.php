<?php

//generate cards
function pullcard() {
	$colors = array('laub','schelle','herz','eichel');
	$faces = array('sechs','sieben','acht','neun','zehn','bube','dame','könig','ass');

	$deck = array();
	
	foreach ($colors as $color) {
		foreach ($faces as $face) {
			$deck[] = array( "face"=>$face, "color"=>$color);
			}
		} 
	return $deck;
}

// pull a card
function shufflecard($this) {
	$card = array_shift($this);
	return $card['face'].' of '.$card['color'];
}



echo '<pre>';



echo '</br><hr>';
print_r(shufflecard(pullcard())).'</br>';


?>