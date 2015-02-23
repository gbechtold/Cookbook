<?php 

$filelines = file("tc-sample-fixedwidth.txt");

foreach ($filelines as $fileline => $line)
	{
	echo htmlspecialchars($line);
	}