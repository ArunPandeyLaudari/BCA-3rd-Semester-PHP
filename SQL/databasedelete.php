<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<?php

if(isset($_GET["sid"]))
{
    $id = $_GET["sid"];

    
    $hostname = "localhost:3306";
    $dbname = "phpbca3";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname,$dbusername,$dbpassword,$dbname);
    if($conn->connect_errno !=0)
    {
        die("Connection failed :" . $conn->connect_error);
    }
$sql = "delete from mystudent where sid = $id";
$result = $conn->query($sql);
if($result)
{
  echo "student data deleted successfully";
  echo"<a href='databasefetch.php>fetchdatabse</a>'";
//    header("location:databasefetch.php");
}
else{
    echo "student data not deleted successfully";
    echo "<br><a href='databasefetch.php'>display students</a>";
}
}
?>

</body>

</html>