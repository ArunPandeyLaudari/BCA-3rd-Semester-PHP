<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<?php

if(isset($_POST["sid"]))
{
    $id = $_POST["sid"];
    $sname = $_POST["sname"];
    $phone = $_POST["sphone"];
    $address = $_POST["saddress"];
    $age = $_POST["age"];

    $hostname = "localhost:3306";
    $dbname = "bca2";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname,$dbusername,$dbpassword,$dbname);
    if($conn->connect_errno !=0)
    {
        die("Connection failed :" . $conn->connect_error);
    }
$sql = "update student set std_name = '$sname', phone = '$phone', address = '$address', age = $age where s_id = $id";
$result = $conn->query($sql);
if($result)
{
   echo "student data updated successfully";
   header("location:displaystudent.php");
}
else{
    echo "student data not updated successfully";
    echo "<br><a href='displaystudent.php'>display student </a>";
}

$conn->close();

}
?>

</body>

</html>