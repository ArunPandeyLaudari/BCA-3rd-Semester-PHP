<?php
if(isset($_GET['sid']))
{
$id = $_GET['sid'];
$hostname = "localhost";
$dbname = "bca3";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($hostname,$dbusername,$dbpassword,$dbname);
if($conn->connect_errno !=0)
{
    die("Connection failed :" . $conn->connect_error);
}
$sql = "select * from students where sid = $id";
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
<form action="updatestudent.php" method="post">
    <input type="hidden" name="sid" value="<?php  echo $row["sid"]; ?>" />
<label for="sname">Std Name : </label>
<input type="text" id ="sname" name="sname" value="<?php echo $row["sname"];  ?>" placeholder="Enter student name here" />
<br><br>
<label>age : </label>
<input type="number" name="age" value="<?php  echo $row["age"]; ?>" min="1" max="120" placeholder="Enter student age" />
<br><br>

<label>Std phone : </label>
<input type="tel" name="sphone" value="<?php  echo $row["phone"]; ?>" placeholder="Enter phone number here" />
<br><br>

<label>Std address : </label>
<input type="text" name="saddress" value="<?php  echo $row["address"]; ?>" placeholder="Enter student address here" />
<br><br>


<label for="gender">Gender : </label>
    <select id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
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