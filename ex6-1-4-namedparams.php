<?php

function image($img) {
	$tag = '<img src="' . $img['src'] . '" ';
	$tag .= 'alt="' . ($img['alt'] ? $img['alt'] : '') . '">';
	return $tag;
}


$image = image(array('src' => 'cow.png', 'alt' => 'cow say moo'));
echo $image;

$image = image(array('src' => 'pig.jpg'));
echo $image;