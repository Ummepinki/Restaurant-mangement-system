<?php
$con = mysql_connect("localhost","","");

if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("food", $con);
$sql="INSERT INTO booking (Name,People,date,Message,Mobile,Email)
VALUES
('$_POST[Name]','$_POST[People]','$_POST[date]','$_POST[Message]','$_POST[Mobile]','$_POST[Email]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "1 booking added";
mysql_close($con)
?>