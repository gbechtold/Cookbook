<?php
if(isset($_POST['name'])) {
$value = htmlspecialchars($_POST['name']);
countup($value);
echo checkset($value);
}

function checkset($value) {
while($_POST['name']=!0){
break;
}
return "Input is set";
}

function countup($count){
	$i=strlen($count);
	echo $i."<br>";
	for($j=1;$j<$i;$j++){
	echo $j;
	}
}

?>