<?php
if(isset($_GET['sid']))
{
$id = $_GET['sid'];
$hostname = "localhost";
$dbname = "phpbca3";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($hostname,$dbusername,$dbpassword,$dbname);
if($conn->connect_errno !=0)
{
    die("Connection failed :" . $conn->connect_error);
}
$sql = "select * from mystudent where sid = $id";
$result = $conn->query($sql);
if($result->num_rows==1)
{
    $row = $result->fetch_assoc();
?>
<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<form action="databaseupdate.php" method="post">
    <input type="hidden" name="sid" value="<?php  echo $row["sid"]; ?>" />
<label for="sname">Std Name : </label>
<input type="text" id ="sname" name="sname" value="<?php echo $row["sname"];  ?>" placeholder="Enter student name here" />
<br><br>
<label>age : </label>
<input type="number" name="age" value="<?php  echo $row["Age"]; ?>" min="1" max="120" placeholder="Enter student age" />
<br><br>

<label>Std phone : </label>
<input type="tel" name="sphone" value="<?php  echo $row["phone"]; ?>" placeholder="Enter phone number here" />
<br><br>

<label>Std address : </label>
<input type="text" name="saddress" value="<?php  echo $row["Addres"]; ?>" placeholder="Enter student address here" />
<br><br>

<label for="gender">Gender:</label>
    <input type="radio"  name="sgender" value="Male" required>Male
    <input type="radio"  name="sgender" value="Female" required>Female
    <br><br>
<input type="submit" name="btn1" value="Update" />
<input type="reset" name="btn2" value="cancel" />
</form>
</body>
</html>

<?php
}
}
?>