<!DOCTYPE html>
<html>

<body>
    <?php
    if (isset($_POST["sname"])) {
        $sname = $_POST["sname"];
        $sphone = $_POST["sphone"];
        $saddress = $_POST["saddress"];
        $sage = $_POST["sage"];
        $scourse = $_POST["scourse"];
        $sgender = $_POST["sgender"];

        $servername = "localhost:3306"; // MySQL IP address
        $dbname = "phpbca3";
        $dbusername = "root"; // default username
        $dbpassword = ""; // default password

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_errno != 0) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO mystudent (sname, course_id, Age, phone, Addres, gender) VALUES ('$sname', $scourse, $sage, '$sphone', '$saddress', '$sgender')";
        $result = $conn->query($sql);

        if ($result) {
            echo "Data inserted successfully";
            header("location:form.php");
        } else {
            echo "Sorry, data not inserted successfully";
            header("location:form.php");
        }

        $conn->close();
    } else {
        header("location:form.php");
    }
    ?>
</body>

</html>