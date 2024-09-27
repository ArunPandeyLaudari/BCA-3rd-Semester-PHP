<!DOCTYPE html>
<html>
<head>
    <title>This is a database connectivity example</title>
</head>
<body>
    <?php
    $hostname = "localhost:3306";
    $dbname = "phpbca3";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_errno != 0) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM mystudent";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
        <table border='1'>
            <tr>
                <th>Sid</th>
                <th>Std Name</th>
                <th>Course </th>
                <th>Age</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>" . $row['sid'] . "</td>
                <td>" . $row['sname'] . "</td>
                <td>" . $row['course_id'] . "</td>
                <td>" . $row['Age'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['Addres'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>
                    <a href='databaseedit.php?sid=" . $row['sid'] . "'>edit</a>
                    <a href='databasedelete.php?sid=" . $row['sid'] . "'>delete</a>
                </td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<h1>Sorry, no data to display</h1>";
    }

    $conn->close();
    ?>
</body>
</html>