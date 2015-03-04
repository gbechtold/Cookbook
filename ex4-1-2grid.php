<?php

//the call
$states = array('a','b','c','a','b','c','a','b','c');
echo pc_grid_horizontal($states,6);

//the function
function pc_grid_horizontal($array, $size) {


	//compute <td> with %ages
	$table_width = 100;	
	$width = intval($table_width / $size);
	
	//define how our <tr> and <td> tags appear
	$tr = '<tr align="center">';
	$td = '<td width=\"$width%%\">%s</td>';
	
	//open table
	$grid = "<table width=\"$table_width%\">$tr";
	
	//loop trough the entries and siplay in rows of size $sized
	//$i keepstrak of when we need a new table row
	$i = 0;
	foreach ($array as $e) { 
		$grid .= sprintf($td, $e);
		$i++;
		
		//end of a row
		//close it up and open a new one
		
		if (!($i % $size)) {
			$grid .= "</tr>$tr";
		}
	}
	
	//pad out remaining cells with blanks
	while ($i % $size) {
		$grid .=sprintf($td, '&nbsp;');
		$i++;
	}
	
	//add </tr>, if necessary
	$end_tr_len = strlen($tr) * -1;
	if (substr($grid, $end_tr_len) != $tr) {
		$grid .= '</tr>';
	} else {
		$grid = substr($grid, 0, $end_tr_len);
	}
	
	// close table
	$grid .= '</table>';
	
	return $grid;
	
}
