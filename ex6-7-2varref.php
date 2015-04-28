<?php 

function &wrap_html_tag($string, $tag = 'b') {
	return "<$tag>$string</$tag>";
}

$string = "my value";
$html =& wrap_html_tag($string);
echo '<pre>'.$html;