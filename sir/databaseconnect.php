<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<?php
if(isset($_POST["sname"]))
{
    $sname = $_POST["sname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    

    $servername = "localhost:3306";
    $dbname = "bca2";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
    if($conn->connect_errno !=0)
    {
        die("Connection failed :" . $conn->connect_error);
    }
$sql = "insert into student(sname,age,phone,address) values('$sname',$age,'$phone','$address')";
$result = $conn->query($sql);
if($result)
{
    echo "data inserted successfully";
}
else{
    echo "sorry data not inserted successfully";
}
$conn->close();
}
else{
    header("location:index.php");
}
?>
</body>
</html>