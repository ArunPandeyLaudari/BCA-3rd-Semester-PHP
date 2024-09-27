<html>
<head>
<title> This is a database connectivity example </title>
</head>
<body>
<?php
if(isset($_GET["sid"])) {
    $id = intval($_GET["sid"]); // Ensure ID is an integer to prevent SQL injection

    $hostname = "localhost:3306";
    $dbname = "bca3";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
    if($conn->connect_errno != 0) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM students WHERE sid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // Bind the ID as an integer parameter

    if($stmt->execute()) {
        header("Location: displaystudent.php"); // Redirect after successful deletion
    } else {
        echo "Student data not deleted successfully";
        echo "<br><a href='displaystudent.php'>Display students</a>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: displaystudent.php"); // Redirect if no ID is provided
}
?>
</body>
</html>