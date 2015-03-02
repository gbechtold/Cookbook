<?php 

$a = strtotime('March 10 + 1 year + 30 month');
echo $a.'<pre></br></br>';
$b = getdate($a);
echo print_r($b).'</br></br></br>';
$c = strtotime('today');
echo print_r($c).'</br></br></br>';
$d = getdate($c);
echo ''.print_r($d).'</br>';
echo gmstrftime('%d %B %Y - %H:%M uhr', $c);


echo '</pre>';



function pc_mktime($tz,$hr,$min,$sec,$mon,$day,$yr) {
	putenv("TZ=$tz");
		$a = mktime($hr,$min,$sec,$mon,$day,$yr);
		putenv('TZ=EST5EDT');
	return $a;
	
	}

$tz = '1';
$hr = '1';
$min = '1';
$sec = '1';
$mon = '1';
$day = '1';
$yr = '1';

echo pc_mktime(1,1,1,1,1,1,1).'</br>';
print_r(getdate($a));
