<?php
/* Taking the Request from the URL using the pattern "ex1-2-1substr-request.php?name=Joe" */

/* fetching the variable for the url */
$name = htmlspecialchars($_GET["name"]);
$stringl = strlen($name)-1;

/* we output the name */
echo 'Hello ' . $name . '! </br></br>';

/* and the first char */
echo 'Your first Character is '.substr($name,1,1).'</br>';

/* and the last char */
echo 'Your last Character is '.substr($name,$stringl,1);
