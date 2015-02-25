<?php

$packed = pack('S4',1974,106,28225,32725);

echo $packed.'</br>';

$nums = unpack('S4',$packed);

foreach($nums as $num => $n){
	echo $n.'</br>';
}

print_r($nums);

if(is_numeric($n)) {echo'okay'.$n;};