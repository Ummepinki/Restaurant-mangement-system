<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

</style>

</head>
<center>
<?php
$con = mysql_connect("localhost","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }  
mysql_select_db("food", $con);

$result = mysql_query("SELECT * FROM booking
						");
						
echo "<caption>Booking Information</caption>";
echo "<table border='3'>
<tr>
<th>Name</th>
<th>People</th>
<th>date</th>
<th>Any special requirements???</th>
<th>Mobile No</th>
<th>Email</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
   echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['People'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
   echo "<td>" . $row['Message'] . "</td>";
    echo "<td>" . $row['Mobile'] . "</td>";
	 echo "<td>" . $row['Email'] . "</td>";
   
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 
</center>
</html>
