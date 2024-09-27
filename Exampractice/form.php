<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- acceptt name,email(valid),phno(10digit),gender,country,database=strore,table=info,required all, -->
<body>
    <form action="insertdatabase.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter name" required>
        <br><br>
        <label for="mail">Email:</label>
        <input type="email" name="email" placeholder="Enter valid email" pattern="[a-zA-Z0-9._%+-]+@gmail\.com" title="Please enter valid gmail(abc@gmail.com)" required>
        <br><br>
        <label for="ph">Phone:</label>
        <input type="text" name="phone"  pattern="[0-9]{10}" required>
        <br><br>
        <label for="gen">Gender:</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <br><br>
        <label for="con">Country:</label>
        <select name="country" >
            <option value="Nepal">Nepal</option>
            <option value="Australia">Australia</option>
            <option value="France">France</option>
            <option value="Finland">Finland</option>
        </select>
        <br><br>
       <button type="submit" name="btn1">Send</button>
       <br>
       <button type="reset">Clear</button>
    </form>
</body>
</html>