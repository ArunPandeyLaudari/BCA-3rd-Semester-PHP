<html>
<head>
<title> This is a database connectivity example </title>
</head>
<body>
<?php
if(isset($_GET["sid"])) {
  
    $sid = $_GET["sid"];

    $hostname = "localhost:3306";
    $dbname = "bca3";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
    if($conn->connect_errno != 0) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "delete from students where sid = $sid";
    $result = $conn->query($sql);
    if($result) {
        header("Location: displaystudent.php"); // Redirect after successful deletion
    } else {
        echo "Student data not deleted successfully";
        echo "<br><a href='displaystudent.php'>Display students</a>";
    }

   
    $conn->close();
} else {
    header("Location: displaystudent.php"); // Redirect if no ID is provided
}
?>
</body>
</html>