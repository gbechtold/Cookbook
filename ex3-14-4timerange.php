<?php

//generate a time range for this week
$now = time();
echo $now;
echo '<pre>';	
print_r(getdate($now));

if (3 < strftime('%H', $now)) { $now += 7200; }

//What day of the week is it?
echo $today = strftime('%w', $now).'</br>';

//
echo $start_day = $now - (86400 * $today).'</br>';

//Print out eahc day of the week
for ($i = 0; $i < 7; $i++) {
	print strftime('%c',$start_day + 86400 * $i).'</br></br>';
}