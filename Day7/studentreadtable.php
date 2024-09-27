<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
</head>
<body>
    <?php
    if (file_exists("student.txt")) {
        $lines = file("student.txt");
        echo "<table border='1'>
                <tr>
                    <th>Roll No:</th>
                    <th>Name:</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Phone no</th>
                    <th>Email</th>
                    
                </tr>";
        foreach ($lines as $line) {
            $row = explode(",", $line);
            echo "<tr>
                    <td>".$row[1]."</td>
                    <td>".$row[0]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                    <td>".$row[4]."</td>
                    <td>".$row[5]."</td>
                    
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Sorry, the file does not exist.";
    }
    ?>
</body>
</html>
