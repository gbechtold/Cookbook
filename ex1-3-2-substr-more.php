<?php
$username = 'john doe';

if ($_GET)
	$username = htmlspecialchars($_GET["user"]);
else $username = 'john doe';

$mylongtext = 'This is a pretty long text that includes '.$username.' and needs to be shortend after 25 chars with a \'..more\'';

echo substr_replace($mylongtext, ".. read more", 25);