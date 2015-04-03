<?php

$raufzaehler = 0;

while($raufzaehler < 10) {
	$raufzaehler++;
	echo $raufzaehler;
		}
		
$gruppe = array(1,2,3,4,5,6,7);
print_r($gruppe);
foreach($gruppe as $member){
	echo $member."</br>";
	}