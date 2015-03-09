<?php

function wrap_html_tag($string, $tag = 'b') {
	return "<$tag>$string</$tag>";

}

$string = 'I am some HTML';

echo wrap_html_tag($string, 'i');
