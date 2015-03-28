<?php

if(isset($_GET)) {
	$name = htmlspecialchars($_GET['name']);
	$counter = strlen($name);
	echo $counter." ".$name;
}
