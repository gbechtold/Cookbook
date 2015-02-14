<?php
/* this is the basic version of a personlized Newsletter text using heredoc*/

if ($twitterid = "guntrambechtold") {
	$url = 'http://twitter.com/guntrambechtold';
	$name = 'Guntram';
}

$twitterid = "guntrambechtold";

print <<< HTML

Name: $name </br>
Twitter-url: $url 

HTML;



?>