<html>
<head>
<style>
* {
	margin: 0px;
	padding: 0px;
}
body {
	font-size: 150%;
	background: #F8F8FF;
}

.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
</style>
</head>
<body>
<center>
 <form action="message.php" method="post">
<h4 style="text-align:center ; color:green;background-color:white">Insert booking information</h4>
Name of the customer: <input type="text" name="Name" /><br/><br/>
Number of people: <input type="text" name="People" /><br/><br/>
Date: <input type="text" name="date" /><br/><br/>

Message \ Special requirements: <input type="text" name="Message" /><br/><br/>
Mobile No: <input type="text" name="Mobile" /><br/><br/>
Email: <input type="text" name="Email" /><br/><br/>

<input type="submit" />
</form>
</center>
</body>
</html>