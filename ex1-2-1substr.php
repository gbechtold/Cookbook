<?php

/* This example is about accessing substrings inside a string*/
$hamburger = 'DoubleHamAndEggsWithPastaramiBurger';

/* We pull out the "Eggs" from our Hamburger by selecting the characters*/
$selectedingredient = substr($hamburger,12,4);

/* Printing out the Selection*/
echo $selectedingredient;

?>