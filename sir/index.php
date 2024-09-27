<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<form action="databaseconnect.php" method="post">
<label for="sname">Std Name : </label>
<input type="text" id ="sname" name="sname" placeholder="Enter student name here" />
<br><br>
<label>Age : </label>
<input type="number" name="age" min="16" max="100" placeholder="Enter student age" />
<br><br>
<label>Std phone : </label>
<input type="tel" name="phone" placeholder="Enter phone number here" />
<br><br>
<label>Std address : </label>
<input type="text" name="address" placeholder="Enter student address here" />
<br><br>
<input type="submit" name="btn1" value="Save" />
<input type="reset" name="btn2" value="cancel" />
</form>
</body>
</html>