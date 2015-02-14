<?php 

/* Taking the Request from the URL using the pattern "file.php?name=Joe" */

/* fetching the variable for the url */
$name = htmlspecialchars($_GET["name"]);
$stringlength = strlen($name);
echo 'Welcome '.$name.'</br>';

$mambaname = substr_replace ($name,'M',0,-$stringlength+1);
echo 'If you would life in Mambaland, your name would be '.$mambaname;