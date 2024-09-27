<html>
<head>
<title> This is a database connectivity example </title>
</head>
<body>
<form action="databaseconnect.php" method="post">
    <label for="sname">Std Name : </label>
    <input type="text" id="sname" name="sname" placeholder="Enter student name here" />
    <br><br>
    <label for="cor">Course : </label>
    <select id="cor" name="course">
        <option value="1">BCA</option>
        <option value="2">BIM</option>
    </select><br><br>
    <label for="gender">Gender : </label>
    <select id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>
    <label>Age : </label>
    <input type="number" name="age" min="16" max="100" placeholder="Enter student age" />
    <br><br>
    <label>Std phone : </label>
    <input type="tel" name="sphone" placeholder="Enter phone number here" />
    <br><br>
    <label>Std address : </label>
    <input type="text" name="saddress" placeholder="Enter student address here" />
    <br><br>
    <input type="submit" name="btn1" value="Save" />
    <input type="reset" name="btn2" value="cancel" />
</form>
</body>
</html>
