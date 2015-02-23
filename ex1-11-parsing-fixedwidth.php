<?php


$filelines = file('tc-sample-fixedwidth.txt');

foreach ($filelines as $fileline => $line) {
	echo $line."<br>";
	}
	
echo "done";

