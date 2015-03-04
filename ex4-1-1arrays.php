<?php

$fruits = array('Apples', 'Pears', 'Oranges', 'Bananas');
echo "<pre>";
array_pop($fruits);
array_push($fruits,'tomato');
print_r($fruits);
echo "</pre>";

$cars = array('red' => 'ferrari', 'black' => 'mustang', 'white' => 'bugatti');

echo $cars ['red'].'<br><br>';

$cars ['red'] = 'schnell';

echo $cars ['red'] .'</br>	';

foreach($cars as $color => $car ) {
	echo "$car ist $color".'</br>';
	}

echo '</br>';

$cards = range(1,52);
unset($cards[2]);
print_r($cards);		

foreach ($cards as $card => $c) {
	echo $c.' ';}	


$poker1 = array('1','2','3');	
$poker2 = array('1','2','3');

$result = array_merge($poker1,$poker2);

print_r($result);
$arraysuche = array_search('3',$result);
echo $arraysuche;
$arraymin = min($result);
echo $arraymin;
$arraymax = max($result);
echo $arraymax;
$arrayrev = array_reverse($result);
print_r($arrayrev);

$unique = array_unique($result);
echo "<pre>";
print_r($unique);
echo "</pre>";
	
