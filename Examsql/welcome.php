<!DOCTYPE html>
<html>
<head>
    <title>Welcome User</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION["username"])) {
    $servername = "localhost:3306";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "tu";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Unable to connect: " . $conn->connect_error);
    }

    // Unsafe query
    $sql = "SELECT * FROM user WHERE username = '" . $_SESSION["username"] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Welcome " . $_SESSION["username"]; // same as $_COOKIES["user"]
        echo "<br> <a href='logout.php'>Logoff</a>";
    }

    $conn->close();
} else {
    header("Location: login.php");
}
?>
</body>
</html>
