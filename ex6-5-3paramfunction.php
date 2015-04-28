<?php

$imagename = htmlspecialchars($_GET['imagename']);
echo $imagename;

function image($img) {
	$tag = '<img src="' . $img['src'] . '" ';
	$tag .= 'alt="' . ($img['alt'] ? $img['alt'] : '') .'">';
	return $tag;
}


$image = image(array('src' => 'cow.png', 'alt' => 'cows say moo'));
echo $image;

$image = image(array('src' => 'pig.jpeg', 'alt' => 'pig say oink	'));
echo $image;
?>