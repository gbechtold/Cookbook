<?php

/* parsing a csv file */

$fp = fopen('tc-sample.csv', 'r') or die("can't open file");
echo "file loaded";

echo "<table>\n";
while($csv_line = fgetcsv($fp,1024)) {
	print '<tr>';
	for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
		print '<td>'.$csv_line[$i].'</td>';
		}
		print "</tr>\n";
	}
print '</table>\n';
fclose($fp) or die ("can't close file");

?>