<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<?php
    $hostname = "localhost:3306";
    $dbname = "bca2";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname,$dbusername,$dbpassword,$dbname);
    if($conn->connect_errno !=0)
    {
        die("Connection failed :" . $conn->connect_error);
    }
$sql = "select * from student";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
   echo "<table border='1'><tr><th>Sid</th><th>Std_name</th><th>Age </th><th>Phone</th> <th>Address </th><th>Action </th></tr>";
   while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['sid']. "</td><td>". $row['sname']. "</td><td>".$row['age']."</td><td>". $row['phone']. "</td><td>". $row['address']. "</td><td><a href='editstudent.php?sid=". $row['sid']."'>edit</a> <a href='deletestudent.php?sid=". $row['sid']."'>delete</a></td></tr>";
   }
   echo "</table>";
}
else{
    echo "<h1>sorry no data to display</h1>";
}
$conn->close();
?>
</body>
</html>