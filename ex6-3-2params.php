<?php

function wrap_html_tag($string, $tag = 'b') {
	return "<$tag>$string</$tag>";

}

$string = 'I am some HTML';
//$string = NULL;

if (is_null($string)) {
echo 'none';}
else {
echo wrap_html_tag($string, 'i');
}
