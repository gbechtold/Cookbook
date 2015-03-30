<?php

$count = 0;

for($count = 0; $count < 10; $count++) {
	echo $count;
	}
	
$list = array(1,2,3,4,5,6,7);
echo "<pre>";
print_r($list);
echo "</pre>";

foreach($list as $li) {
	echo $li.'<br>';
	}

$counter = 0;
while($counter < 10) {
	echo $counter++;
}


?>