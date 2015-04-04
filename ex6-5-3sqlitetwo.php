<?php

//phpinfo();
$database = new SQLite3('myDatabase.db');
/*
$sql = 'CREATE TABLE guests (
		guestid INTEGER PRIMARY KEY,
		fname TEXT,
		lname TEXT,
		comments TEXT
)';

$database->exec($sql); 

$sql = 'INSERT INTO guests (fname, lname, comments)'.
	'VALUES("Guntram", "Bechtold", "Mein Kommentar");';

$database->exec($sql);
*/

$sql = "SELECT * FROM guests ORDER BY lname, fname";

$result = $database->query($sql);

while ($row = $result->fetchArray()){
	echo $row['fname'] . " " . $row	['lname'];
	echo " said " . substr($row['comments'],0,50);
	echo "</br>";
}
echo "done";

?>