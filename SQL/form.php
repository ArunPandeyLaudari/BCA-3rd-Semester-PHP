<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is database connectivity example</title>
</head>
<body>
    <form action="databaseconnect.php" method="post">
        <label for="sname">Std Name</label>
        <input type="text" name="sname" placeholder="enter std name here" required>
        <br>

        <label for="sage">Std Age</label>
        <input type="number" name="sage" min="16" max="100" required>
        <br>

        <label for="scourse">Course</label>
        <select name="scourse">
            <option value="1">BCA</option>
            <option value="2">BIM</option>
            <option value="4">BHM</option>
        </select>
        <br>

        <label for="Phone">Phone no</label>
        <input type="number" name="sphone" required>
        <br>

        <label for="address">Address</label>
        <input type="text" name="saddress" placeholder="Enter your address here" required>
        <br>

        <label for="sgender">Gender:</label>
        <select name="sgender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>

        <input type="submit" value="Submit" name="btn1">
        <input type="reset" value="clear" name="btn2">
    </form>
</body>
</html>
