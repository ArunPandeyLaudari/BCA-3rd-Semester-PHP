<html>
<head>
<title> This is a database connectivity example </title>
</head>
<body>
<?php
if(isset($_POST["sid"])) {
    $id = $_POST["sid"];
    $sname = $_POST["sname"];
    $phone = $_POST["sphone"];
    $address = $_POST["saddress"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    $hostname = "localhost:3306";
    $dbname = "bca3";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
    if($conn->connect_errno != 0) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE students SET sname = ?, phone = ?, address = ?, age = ?, gender = ? WHERE sid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssisi", $sname, $phone, $address, $age, $gender, $id); // Bind parameters

    if($stmt->execute()) {
        echo "Student data updated successfully";
        header("location:displaystudent.php");
    } else {
        echo "Student data not updated successfully";
        echo "<br><a href='displaystudent.php'>Display student</a>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
