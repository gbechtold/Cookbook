<?php

if($_GET) {
$myvariable=htmlspecialchars($_GET["var"]);

echo $myvariable." ";

 for($i = 1,$j = strlen($myvariable);$i<=$j;$i++) {
 echo $i; }
 
};
if(!$_GET) {

};