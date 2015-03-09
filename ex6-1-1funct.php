<?php

function total($a,$b) {
	if(null !== $a && $b) {
	$c = $a + $b;
	echo $c;
	}
}

total(1,10);