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
$artefact2 = basename($artefact1);	

$jsonfile = 'https://www.yumpu.com/en/document/json/'.$artefact2;
echo '<a href="'.$jsonfile.'">'.$jsonfile.'</a>';
echo "<br>";

$string = file_get_contents($jsonfile);
// https://images.yumpu.com/yumpu.com/000/046/850/808/1424272463_3792/zoom/o_19eek0utp1iqdke81b675j3000009.jpg?v=5280

$document_json = json_decode($string, true);
echo'<pre>';
echo 'Base Path: '.$document_json['document']['base_path'].'</br></br>';
// echo 'Images: </br>';
$img_list = array();

foreach ($document_json['document']['pages'] as $pages => $page) {
	 foreach ($page as $imgs) {
			if(isset($imgs['zoom'])){
			$img_list[] = $imgs['zoom'];
			}
		}	
	}
}		
// print_r($img_list);
// call zip download here


echo '</br></br>';
// print_r($document_json);
echo'</pre>';

endif;

create_zip($img_list,'my-archive.zip');

// zip download function

function create_zip($files = array(), $destination = '', $overwrite = false) {
 
 if(file_exists($destination) && !$overwrite) { return false; }
 echo '<pre>';
 echo $destination.'</br>';
 print_r($files);
 echo'</br>';
 echo $overwrite.'</br>';
 echo '</pre>';
 echo 'create zip';
}





 
//closing the document
echo '</body>';


?>