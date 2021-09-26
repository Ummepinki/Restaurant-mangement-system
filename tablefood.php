<?php
$con = mysql_connect("localhost","","");

if (!$con)
{
die('Could not connect: ' . mysql_error());
}
// Create table
mysql_select_db("food", $con);

$sql = "CREATE TABLE booking
(
Name varchar(100),
People varchar(15),
date varchar(15),
Message varchar(1000),

Mobile varchar(15),
Email varchar(18)

)";
// Execute query
mysql_query($sql,$con);


echo "Table created";

mysql_close($con)
?>