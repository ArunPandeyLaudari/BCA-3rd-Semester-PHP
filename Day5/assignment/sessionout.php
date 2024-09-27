<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["userid"]) && isset($_SESSION["username"]) )
    {
        echo"Welcome".$_SESSION["userid"]."your userid id".$_SESSION["username"];
        echo"<br> <a href='logout.php'>Logout please go to the getv session hero</a>";
    }
    else{
        echo"session variable not found";
        header["location:login.php"];
    
    }
   
    ?>
</body>
</html>