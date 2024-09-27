<html>

<head>
    <title> This is a database connectivity example </title>
</head>

<body>
    <?php
    if (isset($_POST["sname"])) {
        $sname = $_POST["sname"];
        $sphone = $_POST["sphone"];
        $saddress = $_POST["saddress"];
        $sage = $_POST["age"];
        $scourse = $_POST["course"];
        $sgender = $_POST["gender"];

        $servername = "localhost:3306";
        $dbname = "bca3";
        $dbusername = "root";
        $dbpassword = "";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_errno != 0) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO students (sname, course, age, phone, address, gender) VALUES ('$sname', $scourse, $sage, '$sphone', '$saddress', '$sgender')";
        $result = $conn->query($sql);
        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Sorry, data not inserted successfully";
        }
        $conn->close();
    } else {
        header("location:index.php");
    }
    ?>
</body>

</html>