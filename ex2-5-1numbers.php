<?php

foreach($numbers = range(1,10) as $number => $n) {
	echo $n;
	};
echo "</br>";
echo mt_rand(0,10);

echo exp($n);
echo pow($n, 3)."</br>";

$m = pow($n, 3);
print number_format($m, 1, '_', '-');

$number = 4;
print "Your search returned $number " . ($number == 1 ? "hit" : "hits") . ".";

$numb = 2;
print "Your team currently consists of ". $numb . " " . ($numb == 1 ? "person" : "people") . ".";

print "Your team consist of ". $numb . " " . ($numb < 2 ? "person" : "people") . ".";