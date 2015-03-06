<?php

echo '
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> Yumpu Magazine Downloader </h1>
';


?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        Magazine url	: <input type="text" name="magazineurl"> <input type="submit">
    </form>
<?php

if (!empty($_POST)): ?>
    Your Magazine is <?php 
    
$magazineurl = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	/* echo ($_POST["magazineurl"]); */
	$url = ($_POST["magazineurl"]);
	echo $url."<br>";

if(preg_match("/\/(\d+)$/",$url,$matches))
{
  $end=$matches[1];
  echo $end;
  echo $matches;
}
else
{
  //Your URL didn't match.  This may or may not be a bad thing.
}
echo $url."<br>";
echo basename($url)."<br>";
$artefact1 = dirname($url);
echo "<br>";
$artefact2 = basename($artefact1);	
echo "<br>";


$jsonfile = 'https://www.yumpu.com/en/document/json/'.$artefact2;

echo '<a href="'.$jsonfile.'">'.$jsonfile.'</a>';
echo "<br>";

$string = file_get_contents($jsonfile);

// https://images.yumpu.com/yumpu.com/000/046/850/808/1424272463_3792/zoom/o_19eek0utp1iqdke81b675j3000009.jpg?v=5280

$json = json_decode($string, true);

echo'<pre>';
echo $json['document']['base_path'];

foreach ($json['document']['pages'] as $key => $jsons) { // This will search in the 2 jsons
     foreach($jsons as $key => $value) {
			
			echo $value['zoom'];
            
    }
}

echo '</br></br>';
print_r($json);
echo'</pre>';


/*
foreach ($json as $key => $value) {
    if (!is_array($value)) {
        echo $key . '=>' . $value . '<br />';
    } else {
        foreach ($value as $key => $val) {
            echo $key . '=>' . $val . '<br />';
        }
    }
}*/

}

	
?>

<?php else: 

 endif; 

echo '</body>';


?>