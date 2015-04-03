<?php
if(isset($_POST['name'])) {
$value = htmlspecialchars($_POST['name']);
echo $value;

}

?>