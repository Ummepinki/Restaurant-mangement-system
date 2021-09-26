<?php
$con = mysql_connect("localhost","","");

if (!$con)
{
die('Could not connect: ' . mysql_error());
}
// Create database
if (mysql_query("CREATE DATABASE food",$con))
{
echo "Database created";
}
else
{
echo "Error creating database: " . mysql_error();
} 

mysql_close($con)
?>
