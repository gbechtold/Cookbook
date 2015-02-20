<?php 

/* This little one replaces Chars with Haxr Chars */

if($_GET) {
	$name = htmlspecialchars($_GET["name"]);
	
	$clearkeys = array("l","z","e","a","s","b","t","b","g");
	$hxrkeys = array("1","2","3","4","5","6","7","8","9");
	
	
	print str_replace($clearkeys,$hxrkeys,$name);
	
	$hxrchars=0;
		for ( $i=0 , $j=strlen($name); $i < $j; $i++) {
			if (strstr("abecde", $name[$i])) {
				$hxrchars++;
			
			}
		
		} 
	
}
echo "<br>".$hxrchars;

if(!$_GET) {
}

