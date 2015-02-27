<?php

$delta = "0.0000001";
$alpha = "1.0000001";

echo $delta - $alpha."</br>";
echo $delta + $alpha."</br>";
echo $delta % $alpha."</br>";
echo $delta / $alpha."</br>";

echo abs($alpha - $delta)."</br>";
if (abs($alpha - $delta) < $delta) {echo "a und b sind gleich"; }

echo round($delta - $alpha)."</br>";
echo ceil($delta + $alpha)."</br>";
echo floor($delta % $alpha)."</br>";
echo $delta / $alpha."</br>";
