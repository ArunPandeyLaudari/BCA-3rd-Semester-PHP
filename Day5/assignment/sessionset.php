<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["btn1"])){
    $userid=$_REQUEST["userid"];
    $username=$_REQUEST["username"];

    session_start();
    $_SESSION["username"]=$userid;
    $_SESSION["userid"]=$username;
   echo"session is set with the user name and Id";
    }
    ?>
</body>
</html>