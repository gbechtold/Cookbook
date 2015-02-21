<?php

$input = "0";
if($_GET){


$input = htmlspecialchars($_GET['inpt']);
echo ucfirst($input)."</br>";
echo ucwords($input)."</br>";
echo strtolower($input)."</br>";
echo strtoupper($input)."</br>";

$extd_input = "    Herzlich Willkommen in ".$input.", nur ".strlen($input)."m unter dem Meer.    ";
echo $extd_input."</br>"	; 
echo ltrim($extd_input)."</br>";
echo rtrim($extd_input)."</br>";
echo trim($extd_input)."</br>"	;

}