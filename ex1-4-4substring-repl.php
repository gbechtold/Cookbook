<?php 

/* This little one replaces Chars with Haxr Chars */

if($_GET) {
	$name = htmlspecialchars($_GET["name"]);
		
	print str_replace(array("l","z","e","a","s","b","t","b","g"),array("1","2","3","4","5","6","7","8","9"),$name);
}

if(!$_GET) {


}

