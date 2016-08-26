<?php

$host="localhost";
$username="root";
$password="";
$database="database1";
$table="register";

mysql_connect("$host", "$username", "$password") or die(mysql_error());
mysql_select_db("$database") or die(mysql_error());

$mysql ="INSERT INTO $table (username, password) VALUES ('$_POST[Username]','$_POST[Password]')";

if(!mysql_query($mysql))
die(mysql_error());

echo "Data Inserted";;

mysql_close();

?>