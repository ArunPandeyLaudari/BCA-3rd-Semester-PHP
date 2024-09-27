<!DOCTYPE html>
<html>
<head>
    <title>This is a database connectivity example</title>
</head>
<body>
    <?php
    if (isset($_POST["sid"])) {
        $id = $_POST["sid"];
        $sname = $_POST["sname"];
        $phone = $_POST["sphone"];
        $address = $_POST["saddress"];
        $age = $_POST["sage"];
        $gender = $_POST["sgender"];

        $hostname = "localhost:3306";
        $dbname = "phpbca3";
        $dbusername = "root";
        $dbpassword = "";

        $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_errno != 0) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("UPDATE mystudent SET sname = ?, phone = ?, Addres = ?, Age = ?, gender = ? WHERE sid = ?");
        $stmt->bind_param("sssisi", $sname, $phone, $address, $age, $gender, $id);
        $result = $stmt->execute();

        if ($result) {
            echo "Student data updated successfully";
            header("Location: databasefetch.php");
            exit();
        } else {
            echo "Student data not updated successfully";
            echo "<br><a href='databasefetch.php'>Display student</a>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
