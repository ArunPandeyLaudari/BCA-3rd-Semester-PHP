<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color:skyblue;
            height:100vh;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center; 
         }
         form{
            background-color:#fff;
            height:400px;
            width: 400px;
            padding:30px;
            border:1px solid black;
            box-shadow:15px 13px 15px pink;
         }
    </style>
</head>
<body>
    <div class="container">
    <form action="stddisplay.php" method="post">
        <h2><u>Student Information</u></h2>
        <label for="stdname">StudentName:</label>
        <input type="text" name="stdname" placeholder="Enter the student name" require><br>
        <label for="age">Age:</label>
        <input type="number" name="age" placeholder="Enter the student age" require><br>
        <label for="clss">Class:</label>
        <input type="text" id="clss" name="Class" placeholder="Enter your class" required><br>
        <label for="gen">Gender:</label>
        <input type="radio" id="gen" name="Gender" value="Male">Male
        <input type="radio" id="gen" name="Gender" value="Female">Female
        <br>
        <label for="Interest">Interest:</label>
        <input type="checkbox" name="Interest1" id="interest" value="Dancing">Dancing
        <input type="checkbox" name="Interest2" id="interest" value="Singing">Singing
        <input type="checkbox" name="Interest3" id="interest" value="Swimming">swimming
        <input type="checkbox" name="Interest4" id="interest" value="Traveling">travelling
         <br>
        <input type="submit" value="Submit" name="btn1">
        <input type="reset" value="Cancel" name="btn2">
    </form>
    </div>
</body>
</html>