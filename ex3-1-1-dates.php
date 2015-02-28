<?php

echo mktime(0,0,0,1,1,1986)."</br>";
echo date(0,1)."</br>";
print strftime('%c').'</br>';
print date('r').'</br>';

$now_1 = getdate();
$now_2 = localtime();
print "$now_1[hours]:$now_1[minutes]:$now_1[seconds]".'</br>	';
print "$now_2[2]:$now_2[1]:$now_2[0]".'</br>';

echo gmmktime().'</br>';
echo mktime().'</br>';