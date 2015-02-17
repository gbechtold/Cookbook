<?php
$vowelcount = 0;

if ($_GET) {
$vowels = 0;
$username = htmlspecialchars($_GET['user']);
	for ($i = 0, $j = strlen($username); $i < $j; $i++) {
		if (strstr ('aeiouAEIOU', $username[$i])) {
			$vowels;
			$vowelcount++;
			
			}
	}
echo $username;
};
if (!$_GET) {
$username = 'John Doe';
echo $username;
};

echo '</br> Vowels: '.$vowelcount;