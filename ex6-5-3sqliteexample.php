<?php

$dbhandle = sqlite_open('db/datamove.db', 0666, $error);
if (!$dbhandle) die ($error);

/* $stm = "CREATE TABLE Friends(Id integer PRIMARY KEY," . 
       "Name text UNIQUE NOT NULL, User text CHECK(User IN ('M', 'F')))";
$ok = sqlite_exec($dbhandle, $stm, $error);

if (!$ok)
   die("Cannot execute query. $error");
*/

echo "Database Friends created successfully";

sqlite_close($dbhandle)

?>