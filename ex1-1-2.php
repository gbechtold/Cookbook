<?php
/* Using Variable with single and double quotes gives different results */
$cost='$10.20';

/* Double Quotes */
print "</br> the cost $cost"."</br>";
print "<html><body> a funny way $cost for $10 \x32 </br> newline";
print "PHP Vars get printed: $cost"."</br>";

/* Single Quotes */
print 'No Vars get printed $cost'."</br>";
print "Just figures \x32\x33";

?>