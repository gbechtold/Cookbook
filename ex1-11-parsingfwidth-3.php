<?php

$filelines = file('tc-sample-fixedwidth.txt');

foreach ($filelines as $fileline => $line) {
	echo htmlspecialchars($line)."</br>";

	};
	
echo "</br>";
echo "second line";
echo "</br>";

$dateizeilen = file('tc-sample-fixedwidth.txt');

foreach ($dateizeilen as $dateizeile => $zeile) {
	echo $zeile."</br>";
}
