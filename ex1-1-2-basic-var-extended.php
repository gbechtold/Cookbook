<?php
/* Using Variable with single and double quotes gives different results */
$cost='$10.20';

/* Double Quotes */
print "The Second Example. With the price of $cost"."</br>";
print "<html><body> A funny way $cost for $10 \x32 </br> and a newline </br></br>";
print "PHP Vars get printed in double quotes: $cost"."</br>";

/* Single Quotes */	
print 'No Vars get printed in single quotes $cost'."</br>";
print "Just figures \x32\x33";

?>