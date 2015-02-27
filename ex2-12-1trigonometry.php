<?php

$numb = 5;
$angles = array(cos($numb), sin($numb), tan($numb));

foreach($angles as $angle => $n){
	print $n."</br>";
	


};

echo deg2rad(cos($numb))."</br>";
echo rad2deg(cos($numb))."</br>";

echo '</br>';	
$hex = '1b';

print $hex . '</br>';
print hexdec($hex);
	