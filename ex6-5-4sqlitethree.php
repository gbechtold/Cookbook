<?php

$database = new sqlite3('theseconddb.db');

/* $sql = "CREATE TABLE userdata (
	userid INTEGER PRIMARY KEY,
	fname TEXT,
	lname TEXT,
	comment TEXT
	)";

$database->exec($sql);	

$sql = 'INSERT INTO userdata (fname, lname, comment)'.'VAlUES(Guntram, Bechtold, Mein Text)';	
*/

$sql = 'SELECT * FROM userdata ORDER BY fname, lname';
$result = $database->query($sql);

while ();

echo "done";