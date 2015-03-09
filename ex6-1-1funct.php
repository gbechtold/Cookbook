<?php

function total($a,$b) {
	if(null !== $a && $b) {
	$c = $a + $b;
	echo $c;
	}
}

total(1,10);
echo '<br>';

function add_number($number) {

	if(null !== $number) {
	 	$number++;
		}
	echo $number;
	}
	
echo '<br><br>';
	
$number = 1;
echo '<br><br>';
	
echo $number.'</br>';
add_number($number);
echo $number;
